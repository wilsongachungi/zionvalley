<?php

namespace App\Http\Controllers;

use App\Models\Harambee;
use Illuminate\Http\Request;

class HarambeesController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{
		// Group Harambee data by user
		$harambees = Harambee::with('user')->get()->groupBy('sent_to');

		return view('user.Harambees.index', compact('harambees'));
	}


	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{
		//
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		$harambees = Harambee::with('user')->get();
		// Step 1: Find the model by its ID
		$harambee = Harambee::findOrFail($id); // This will throw a 404 if the model is not found

		// Step 2: Pass the data to the edit view
		return view('user.harambees.edit', compact('harambee'));
	}

	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{
		// Step 1: Validate the request data
		$validatedData = $request->validate([

			'harambees' => 'required|integer',

		]);

		// Step 2: Find the model by ID
		$harambee = Harambee::findOrFail($id); // If the model is not found, this will throw a 404 error

		// Step 3: Update the model with the validated data

		$harambee->harambees = $validatedData['harambees'];


		// Step 4: Save the changes to the database
		$harambee->save();

		// Step 5: Return a response (e.g., redirect back with a success message)
		return redirect()->route('harambees.index')->with('success', 'Harambee updated successfully!');
	}


	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		// Find the Harambee by its ID
		$harambee = Harambee::findOrFail($id);

		// Delete the Harambee record
		$harambee->delete();

		// Redirect back with a success message
		return redirect()->route('harambees.index')->with('success', 'Harambee deleted successfully.');
	}
}
