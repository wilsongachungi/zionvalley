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

        // Ensure the directory exists
        $directory = 'profileimage';
        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        // Check if a file was uploaded
        if ($request->hasFile('passport')) {
            $passport = $request->file('passport');
            $passportname = 'passport_' . time() . '.' . $passport->getClientOriginalExtension();
            $passport->move($directory, $passportname);

            // Check if the user already has an image record
            $profile = Image::where('user_id', $user->id)->first();

            if ($profile) {
                // Delete the old passport image file if it exists
                $oldPassportPath = $directory . '/' . $profile->passport;
                if (file_exists($oldPassportPath)) {
                    unlink($oldPassportPath);
                }

                // Update the existing record with the new passport image
                $profile->passport = $passportname;
            } else {
                // Create a new record
                $profile = new Image;
                $profile->passport = $passportname;
                $profile->user_id = $user->id;
            }

            $profile->save();

            Session::flash('success', 'Profile image has been updated successfully.');
        } else {
            Session::flash('error', 'No passport image uploaded.');
        }

        return redirect()->back();
    }
}
