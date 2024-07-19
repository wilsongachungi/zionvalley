<?php

namespace App\Http\Controllers;

use App\Models\Identify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class IdentifyController extends Controller
{
	public function store(Request $request)
	{
		$userId = auth()->user()->id;

		// Check if the user has already submitted the data
		$existingEntries = Identify::where('user_id', $userId)->get();

		if ($existingEntries->count() > 0) {
			// Keep only the first entry and delete the rest
			$existingEntries->skip(1)->each(function($entry) {
				$entry->delete();
			});

			// Prevent further submission
			return redirect()->back()->with('error', 'You have already submitted your identify data.');
		}

		// Validate the incoming request
		$request->validate([
			'identify_data' => 'required|string|max:255',
		]);

		// Store the identify data for the user
		$identity = new Identify();
		$identity->identify_data = $request->input('identify_data');
		$identity->user_id = $userId;
		$identity->save();

		// Mark that the user has submitted the data
		session(['identify_submitted' => true]);

		return redirect()->back()->with('success', 'Your identify data has been submitted successfully.');
	}


	public function update(Request $request, $id)
    {
        $identity = Identify::findOrFail($id);
        $identity->identify_data = $request->input('identify_data');
        $identity->save();

        return redirect()->back()->with('success', 'Identity data updated successfully');
    }
}
