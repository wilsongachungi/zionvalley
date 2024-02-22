<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ImageController extends Controller
{
	public function upload_profile_image(Request $request)
	{
		$user = Auth::user();

		$profile = new Image;

		// Define the directory path
		$directory = 'profileimage';

		if (!file_exists($directory)) {
			mkdir($directory, 0755, true); // Create directory with read, write, and execute permissions for owner and read and execute permissions for others
		}


		$idimage = $request->file('idimage');
		$idimagename = 'idimage_' . time() . '.' . $idimage->getClientOriginalExtension();
		$idimage->move($directory, $idimagename);

		$passport = $request->file('passport');
		$passportname = 'passport_' . time() . '.' . $passport->getClientOriginalExtension();
		$passport->move($directory, $passportname);

		$profile->idimage = $idimagename;
		$profile->passport = $passportname;

		$profile->user_id = $user->id;

		$profile->save();

		Session::flash('success', 'Profile image has been updated successfully.');

		return redirect()->back();
	}
}
