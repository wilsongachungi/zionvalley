<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Contact;
use App\Models\Involve;
use App\Models\Members;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;
use App\Models\Harambee;
use App\Models\Identify;

class AdminController extends Controller
{
	public function addview()
	{
		return view('user.add_member');
	}


	public function upload(Request $request)
	{
		$members = new members;

		$image = $request->file;

		$imagename = time() . '.' . $image->getClientoriginalExtension();

		$request->file->move('membersimage', $imagename);

		$members->image = $imagename;

		$members->name = $request->name;
		$members->phone = $request->phone;
		$members->idnumber = $request->idnumber;
		$members->position = $request->position;

		$members->save();

		return redirect()->back()->with('message', 'Member Added Successfully!');
	}

	public function involve()
	{
		if (auth()->check()) {
			if (auth()->user()->usertype === '0') {
				return redirect()->route('index')->with('error', 'Unauthorized access');
			}
			$involves = Involve::all();
			return view('user.involve', compact('involves'));
		}
		return redirect()->back();
	}

	public function job_application()
	{
		if (auth()->check()) {
			if (auth()->user()->usertype === '0') {
				return redirect()->route('index')->with('error', 'Unauthorized access');
			}
			$job = JobApplication::all();
			return view('user.job_application', compact('job'));
		}
		return redirect()->back();
	}

	public function contact()
	{
		if (auth()->check()) {
			if (auth()->user()->usertype === '0') {
				return redirect()->route('index')->with('error', 'Unauthorized access');
			}
			$contacts = Contact::all();
			return view('user.contact', compact('contacts'));
		}
		return redirect()->back();
	}

	public function logout()
	{
		Auth::logout();

		return redirect('/login');
	}

	public function fetchData()
{
    // Fetch users with their associated identities and comments, ordered by creation date, newest first
    $users = User::with(['identify', 'adminComments'])->orderBy('created_at', 'desc')->get();

    // Pass the data to the view
    return view('user.users', [
        'users' => $users,
    ]);
}

}
