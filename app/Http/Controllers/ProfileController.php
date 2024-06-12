<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ProfileInformation; 

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

        $user = auth()->user(); 

        $profile = ProfileInformation::where('user_id', $user->id)->first();

        if (!$profile) {
            $profile = new ProfileInformation();
            $profile->user_id = $user->id; 
        }



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