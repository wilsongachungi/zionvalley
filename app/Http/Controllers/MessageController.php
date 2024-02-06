<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use App\Models\User;


class MessageController extends Controller
{
	public function send_comment(Request $request)
	{
		$validatedData = $request->validate([
			'message' => 'required|string',
		]);

		$user = auth()->user();

		$message = $user->messages()->create([
			'message' => $validatedData['message'],
		]);

		return redirect()->back()->with('success', 'Message saved successfully.');
	}

	public function feedback(Request $request, $messageId)
	{
		$request->validate([
			'admin_reply' => 'required|string',
		]); 

		$message = Message::findOrFail($messageId);
		$message->admin_reply = $request->input('admin_reply');
		$message->save();

		return redirect()->back()->with('success', 'Admin reply added successfully.');
	}
}
