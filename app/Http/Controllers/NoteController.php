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
        $notes = Note::all();
        return view('user.notes', compact('notes'));
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
    {
		{
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

			// Redirect back to a specific page (e.g., notes index)
			return redirect()->route('notes.index')->with('success', 'Note created successfully.');
		}
    }

    /**
     * Display the specified resource.
     */
	public function show(string $id)
	{
		// Fetch the resource by its ID
		$note = Note::findOrFail($id);

		// Pass the resource to a view
		return view('notes.show', compact('note'));
	}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
{
    // Find the note by its ID
    $note = Note::findOrFail($id);

    // Return the edit view with the note data
    return view('user.notes_edit', compact('note'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
