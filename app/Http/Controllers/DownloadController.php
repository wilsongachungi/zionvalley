<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Download;

class DownloadController extends Controller
{
	public function downloads()
	{ {
			$downloads = Download::all();
			return view('user.downloads', compact('downloads'));
		}
	}

	public function view_downloads()
	{
		return view('user.add-downloads');
	}

	public function add_downloads(Request $request)
	{

		$request->validate([
			'title' => 'required|string',
			'file' => 'required|file',
		]);


		$file = $request->file('file');
		$fileName = time() . $request->file('file')->getClientOriginalName();
		$path = $request->file('file')->storeAs('downloads', $fileName, 'public');


		
		$download = Download::create([
			'title' => $request->title,
			'file_path' => 'downloads/' . $fileName,
		]);

		return redirect()->back()->with('success', 'Download added successfully.');
	}
}
