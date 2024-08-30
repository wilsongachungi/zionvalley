<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Harambee;
use App\Models\Identify;
use App\Models\AdminComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
		$harambeeTotals = Harambee::select('sent_to', DB::raw('SUM(harambees) as total_harambees'))
        ->groupBy('sent_to')
        ->with('user') // Ensure to load user data if needed
        ->get();

		$harambees = Harambee::all();

		$totalHarambees = $harambees->sum('harambees');

		return view('user.trasaction', compact('harambees', 'totalHarambees','harambeeTotals'));
	}

	public function architect()
	{
		return view('user.architect');
	}

	public function identification()
	{
		// Fetch all Identify records
		$identity = Identify::all();

		// Fetch comments for all users
		$comments = AdminComment::all()->keyBy('user_id');

		// Pass data to the view
		return view('user.identification', compact('identity', 'comments'));
	}
}
