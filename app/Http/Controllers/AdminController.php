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
    // Check if the user is authenticated
    if (auth()->check()) {
        // Check if the user is of the appropriate type
        if (auth()->user()->usertype === '0') {
            // Redirect or show an error page for unauthorized access
            return redirect()->route('index')->with('error', 'Unauthorized access');
        }

        // If the user is not an admin, fetch involves and return the view
        $involves = Involve::all();
        return view('user.involve', compact('involves'));
    }

    // If the user is not authenticated, redirect back
    return redirect()->back();
}

	public function job_application()
	{

		// Check if the user is authenticated
		if (auth()->check()) {
			// Check if the user is of the appropriate type 
			if (auth()->user()->usertype === '0') {
				// Redirect or show an error page for unauthorized access
				return redirect()->route('index')->with('error', 'Unauthorized access');
			}

			// If the user is not an admin, fetch job applications and return the view
			$job = JobApplication::all();
			return view('user.job_application', compact('job'));
		}

		// If the user is not authenticated, redirect back
		return redirect()->back();
	}

	public function contact()
	{
		$contacts = Contact::all();
		return view('user.contact', compact('contacts'));
	}
}
