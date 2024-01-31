<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Harambees;
use Illuminate\Http\Request;

class AccountController extends Controller
{
	public function info()
	{
		return view('user.profile');
	}

	public function account()
	{
		return view('user.account');
	}

	public function credit_harambee()
	{
		$users = User::all();

		return view('user.credit-harambee', ['users' => $users]);
	}

	public function upload_harambee(Request $request)
	{
		$request->validate([
			'deposit' => 'required|numeric',
			'withdrawn' => 'required|numeric',
			'harambees' => 'required|numeric',
			'sent_to' => 'required|string',
		]);



		$harambee = new harambees;
		$harambee->deposit = $request->deposit;
		$harambee->withdrawn = $request->withdrawn;
		$harambee->harambees = $request->harambees;
		$harambee->sent_to = $request->sent_to;

		$harambee->save();

		return redirect()->back()->with('message', 'added successfully');
	}
}
