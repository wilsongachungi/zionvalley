<?php

namespace App\Http\Controllers;

use App\Models\PhoneInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PhoneInfoController extends Controller
{
	public function store(Request $request)
	{
		// Validate the incoming request
		$request->validate([
			'is_whatsapp' => 'nullable|boolean',
			'is_mpesa' => 'nullable|boolean',
			'category' => 'required|in:Financial Supporter,CBO Member,CBO Land Owner,Employee',
		]);

		// Handle checkboxes for is_whatsapp and is_mpesa
		$is_whatsapp = $request->has('is_whatsapp') ? true : false;
		$is_mpesa = $request->has('is_mpesa') ? true : false;

		// Create a new instance of the PhoneInfo model
		$phoneInfo = new PhoneInfo;

		// Assign values to the model's attributes
		$phoneInfo->user_id = Auth::id(); // Set the current authenticated user's ID
		$phoneInfo->is_whatsapp = $is_whatsapp; // Assign the boolean value
		$phoneInfo->is_mpesa = $is_mpesa; // Assign the boolean value
		$phoneInfo->category = $request->input('category'); // Assign the selected category from the form

		// Save the model to the database
		$phoneInfo->save();

		// Return a response indicating success
		return redirect()->back()->with('status', 'Information saved successfully!');
	}
}
