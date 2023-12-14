<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Members;
use App\Models\Involve;
use App\Models\Contact;
use App\Models\JobApplication;

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
		$involves = Involve::all();
		return view('user.involve', compact('involves'));
	}

	public function job_application()
	{
		$job = JobApplication::all();
		return view('user.job_application', compact('job'));
	}

	public function contact()
	{
		$contacts = Contact::all();
		return view('user.contact', compact('contacts'));
	}
}
