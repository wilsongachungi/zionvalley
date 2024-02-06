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

		$message = Message::create([
			'user_id' => $user->id,
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

	public function delete_message($id)
	{
		$message = Message::findOrFail($id);

		// Check if the authenticated user is the owner of the message
		if ($message->user_id !== auth()->user()->id) {
			return redirect()->back()->with('error', 'You are not authorized to delete this message.');
		}

		$message->delete();

		return redirect()->back()->with('success', 'Message deleted successfully.');
	}
}
