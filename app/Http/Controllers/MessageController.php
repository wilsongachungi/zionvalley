<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
	public function send_comment(Request $request)
	{
		$validatedData = $request->validate([
			'message' => 'required|string',
		]);

		// Access the currently authenticated user
		$user = auth()->user();

		// Create a new message associated with the authenticated user
		$message = $user->messages()->create([
			'message' => $validatedData['message'],
		]);

		return redirect()->back()->with('success', 'Message saved successfully.');
	}
}
