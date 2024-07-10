<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Image;
use App\Models\Harambee;
use App\Models\Identify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
	public function info()
	{
		$user = Auth::user();


		$identity = Identify::all();

		$profile = Image::where('user_id', $user->id)->get();

		
		return view('user.profile', compact('identity', 'profile'));
	}

	public function account()
	{
		$harambees = Harambee::with('user')->where('sent_to', Auth::id())->get();

		return view('user.account', compact('harambees'));
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


		$total = $request->deposit - $request->withdrawn;


		$harambee = new Harambee();
		$harambee->deposit = $request->deposit;
		$harambee->withdrawn = $request->withdrawn;
		$harambee->harambees = $request->harambees;
		$harambee->sent_to = $request->sent_to;
		$harambee->status = false;

		$harambee->total = $total;

		$harambee->save();

		return redirect()->back()->with('message', 'added successfully');
	}
}
