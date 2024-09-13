<?php

namespace App\Http\Controllers;

use App\Models\Identify;
use App\Models\AdminComment;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Identity;

class CommentController extends Controller
{
	public function store(Request $request)
	{
		$request->validate([
			'comment' => 'required|string',
			'user_id' => 'required|exists:users,id',
		]);

		if ($request->filled('comment_id')) {
			// Update existing comment
			$comment = AdminComment::find($request->comment_id);
			if ($comment) {
				$comment->comment = $request->comment;
				$comment->save();
			}
		} else {
			// Create new comment
			AdminComment::create([
				'user_id' => $request->user_id,
				'comment' => $request->comment,
			]);
		}

		return redirect()->back()->with('success', 'Comment saved successfully.');
	}


	public function edit($userId)
	{
		// Fetch the identify record for the given user ID
		$identify = Identify::where('user_id', $userId)->first();

		// Fetch the latest comment for this user
		$comment = AdminComment::where('user_id', $userId)->latest()->first();

		return view('user.identification', compact('identify', 'comment'));
	}
}
