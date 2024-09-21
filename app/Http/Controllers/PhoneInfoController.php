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
			'category' => 'required|in:Financial Supporter,CBO Member,CBO Land Owner,Employee',
		]);

		// Handle checkboxes for is_whatsapp and is_mpesa
		$is_whatsapp = $request->input('is_whatsapp', false) ? true : false;
		$is_mpesa = $request->input('is_mpesa', false) ? true : false;

		// Create or update the PhoneInfo model
		PhoneInfo::updateOrCreate(
			['user_id' => Auth::id()], // Use user ID as the unique identifier
			[
				'is_whatsapp' => $is_whatsapp,
				'is_mpesa' => $is_mpesa,
				'category' => $request->input('category'),
			]
		);

		// Return a response indicating success
		return redirect()->back()->with('status', 'Information saved successfully!');
	}
}
