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
        // Validate the request
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'comment' => 'required|string|max:1000',
        ]);

        // Create a new comment
        AdminComment::create([
            'user_id' => $request->user_id,
            'comment' => $request->comment,
        ]);

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Comment added successfully.');
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
