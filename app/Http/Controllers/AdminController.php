<?php

namespace App\Http\Controllers;

use App\Models\Contact;

use App\Models\Involve;
use App\Models\Members;
use Illuminate\Http\Request;
use App\Models\JobApplication;
use Illuminate\Support\Facades\Auth;

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
		if(Auth::id()){
			return redirect('user.index');
		}
		else{
			$contacts = Contact::all();
		    return view('user.contact', compact('contacts'));
		}

	}
}
