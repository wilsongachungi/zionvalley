<?php

namespace App\Http\Controllers\Documents;

use App\Models\Document;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class DocumentsController extends Controller
{
	public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,docx,xlsx,jpg,png|max:10240',
        ]);

        $filePath = $request->file('file')->store('documents', 'public');

        Document::create([
            'name' => $request->name,
            'description' => $request->description,
            'file_path' => $filePath,
            'mime_type' => $request->file('file')->getClientMimeType(),
        ]);

        return back()->with('success', 'Document uploaded successfully!');
    }


	public function index()
	{
		$documents = Document::all();

		return view('user.dashboard', compact('documents'));
	}

	public function download(Document $document, Request $request)
	{
		$filePath = storage_path('app/public/' . $document->file_path);

		if (!file_exists($filePath)) {
			return back()->with('error', 'File not found.');
		}

		if ($request->query('download') == 'true') {
			return response()->download($filePath, $document->name);
		}

		return response()->file($filePath, [
			'Content-Type' => $document->mime_type,
		]);
	}
		public function show(Document $document)
	{
		return view('documents.show', compact('document'));
	}

		public function destroy(Document $document)
	{

		Storage::delete($document->file_path);

		$document->delete();

		return redirect()->back()->with('success', 'Document deleted successfully');
	}

}
