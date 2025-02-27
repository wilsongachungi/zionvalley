<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Download;

class DownloadController extends Controller
{
	public function downloads()
	{ 
			$downloads = Download::all();
			return view('user.downloads', compact('downloads'));
		
	}

	public function view_downloads()
	{
		$downloads = Download::all();
		return view('user.add-downloads',compact('downloads'));
	}

	public function add_downloads(Request $request)
	{
		$request->validate([
			'title' => 'required|string',
			'file' => 'required|file',
		]);
	
		// Define the directory path
		$directory = 'downloads';
	
		if (!file_exists($directory)) {
			mkdir($directory, 0755, true); // Create directory with read, write, and execute permissions for owner and read and execute permissions for others
		}
	
		$file = $request->file('file');
		$fileName = time() . $request->file('file')->getClientOriginalName();
		$path = $request->file('file')->move($directory, $fileName);
	
		$download = Download::create([
			'title' => $request->title,
			'file_path' => $directory . '/' . $fileName, // Store the file path relative to the public directory
		]);
	
		return redirect()->back()->with('success', 'Download added successfully.');
	}

	public function delete_download(Download $download)
    {
        // Perform authorization check here if needed
        // Example: $this->authorize('delete', $download);

        // Delete the download
        $download->delete();

        return redirect()->back()->with('success', 'Download deleted successfully.');
    }

	public function edit($id)
    {
        // Fetch the download item from the database based on the ID
        $download = Download::findOrFail($id);

        // Pass the download item to the view for editing
        return view('downloads.edit', compact('download'));
    }

	public function update(Request $request, $id)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            // Add more validation rules as needed
        ]);

        // Find the download item from the database based on the ID
        $download = Download::findOrFail($id);

        // Update the download item with the new data
        $download->title = $request->input('title');
        // Update other fields as needed

        // Save the updated download item
        $download->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Download updated successfully.');
    }



}