<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

class NoteController extends Controller
{
	/**
	 * Display a listing of the resource.
	 */
	public function index()
	{

			$header = 'Notes List';
			$notes = Note::all(); // Fetch all notes and store in the plural variable
			return view('user.notes', compact('notes', 'header'));

	}

	/**
	 * Show the form for creating a new resource.
	 */
	public function create()
	{
		return view('user.create_notes');
	}

	/**
	 * Store a newly created resource in storage.
	 */
	public function store(Request $request)
	{ {
			// Validate the request data
			$validatedData = $request->validate([
				'title' => 'required|string|max:255',
				'content' => 'required|string',
			]);

			// Create a new note
			$note = new Note();
			$note->title = $validatedData['title'];
			$note->content = $validatedData['content'];
			$note->save();


			return redirect()->route('notes.index')->with('success', 'Note created successfully.');
		}
	}

	/**
	 * Display the specified resource.
	 */
	public function show(string $id)
	{

		$notes = Note::findOrFail($id);


		return view('notes.show', compact('notes'));
	}


	/**
	 * Show the form for editing the specified resource.
	 */
	public function edit(string $id)
	{
		$notes = Note::find($id);
		if (!$notes) {
			return redirect()->route('notes.index')->with('error', 'Note not found.');
		}
		return view('user.notes_edit', compact('notes'));
	}


	/**
	 * Update the specified resource in storage.
	 */
	public function update(Request $request, string $id)
	{

		$request->validate([
			'title' => 'required|string|max:255',
			'content' => 'required|string',
		]);


		$note = Note::findOrFail($id);

		// Update the note with the request data
		$note->title = $request->input('title');
		$note->content = $request->input('content');
		$note->save();

		// Redirect to the notes index with a success message
		return redirect()->route('notes.index')->with('success', 'Note updated successfully.');
	}


	/**
	 * Remove the specified resource from storage.
	 */
	public function destroy(string $id)
	{
		$note = Note::findOrFail($id);
		$note->delete();
		return redirect()->route('notes.index');
	}
}
