<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ViewController extends Controller
{
	public function user_comment()
	{
		$userMessages = Message::all();

		return view('user.comment-messages', compact('userMessages'));
	}

	public function reply_message()
	{
		$userMessages = Message::all();

		return view('user.reply', compact('userMessages'));
	}
	
	public function transaction()
	{
		return view('user.trasaction');
	}
}
