<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ViewController extends Controller
{
	public function user_comment()
	{
		return  view('user.comment-messages');
	}

	public function reply_message()
	{
		$userMessages = Message::all();

		return view('user.reply', compact('userMessages'));
	}
}
