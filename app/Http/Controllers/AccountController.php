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

		// Fetch only one identity record for the authenticated user
		$identity = Identify::where('user_id', $user->id)->first();

		// Fetch all profile images for the authenticated user
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
			'deposit' => 'nullable|numeric',
			'withdrawn' => 'nullable|numeric',
			'harambees' => 'required|numeric',
			'sent_to' => 'required|string',
			'comment' => 'required|string',
		]);

		

		$existingTotal = Harambee::sum('harambees');


		$total = $existingTotal + $request->harambees;




		$harambee = new Harambee();
		$harambee->deposit = $request->deposit;
		$harambee->withdrawn = $request->withdrawn;
		$harambee->harambees = $request->harambees;
		$harambee->sent_to = $request->sent_to;
		$harambee->comment = $request->comment;
		$harambee->status = false;

		$harambee->total = $total;

		$harambee->save();

		return redirect()->back()->with('message', 'added successfully');
	}
}
