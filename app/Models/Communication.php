<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Communication extends Model
{
	use HasFactory;
	protected $table = 'communication';

	protected $fillable = ['sender_id', 'message', 'recipient_id'];

	// Define your communication method here
	public function sendMessage(Request $request)
	{
		$request->validate([
			'sender_id' => 'required|exists:users,id',
			'message' => 'required|string|max:255',
		]);

		Communication::create([
			'sender_id' => $request->sender_id,
			'message' => $request->message,
			'recipient_id' => 12,
		]);

		return redirect()->back()->with('success', 'Message sent successfully!');
	}
}
