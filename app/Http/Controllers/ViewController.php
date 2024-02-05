<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
	public function user_comment()
	{
		return  view('user.comment-messages');
	}
}
