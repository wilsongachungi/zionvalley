<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProfileInformation; // Import the ProfileInformation model

class ProfileController extends Controller
{
    public function complete_profile(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'nullable|email',
            'age' => 'required|integer',
            'country' => 'required|string',
            'residence' => 'required|string',
        ]);

        $user = auth()->user(); // Assuming you want to associate this with the logged-in user

        // Check if the user already has a profile information record
        $profile = ProfileInformation::where('user_id', $user->id)->first();

        // If the profile record doesn't exist, create a new one
        if (!$profile) {
            $profile = new ProfileInformation();
            $profile->user_id = $user->id; // Assuming there's a user_id column in the profileinformation table
        }

        // Update the profile information

        $profile->age = $validatedData['age'];
        $profile->country = $validatedData['country'];
        $profile->residence = $validatedData['residence'];

        if ($request->filled('email')) {
            $profile->email = $validatedData['email'];
        }
        $profile->save();

        return redirect()->back()->with('success', 'Profile information updated successfully.');
    }
}