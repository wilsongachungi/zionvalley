<?php

namespace App\Http\Controllers;

use App\Models\Harambee;
use Illuminate\Http\Request;

class HarambeeController extends Controller
{
	public function edit($id)
	{
		// Fetch the harambee record from the database
		$harambee = Harambee::findOrFail($id);

		// Return the edit view with the harambee data
		return view('user.harambee-edit', compact('harambee'));
	}

	public function update(Request $request, $id)
	{
		// Validate the request data
		$request->validate([
			'harambee' => 'required|string|max:255',
		]);

		// Fetch the harambee record and update it
		$harambee = Harambee::findOrFail($id);
		$harambee->harambees = $request->input('harambee');
		$harambee->save();

		// Redirect back with a success message
		return redirect()->back()->with('success', 'Harambee updated successfully.');
	}



	public function destroy($id)
	{
		// Fetch the harambee record and delete it
		$harambee = Harambee::findOrFail($id);
		$harambee->delete();

		// Redirect back with a success message
		return redirect()->back()->with('success', 'Harambee deleted successfully.');
	}

	public function edit_harambee()
	{
		return view('user.harambee-edit');
	}
}
