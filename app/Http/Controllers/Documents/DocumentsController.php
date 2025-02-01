<?php

namespace App\Http\Controllers\Documents;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function store(Request $request){
		$request->validate([
            'title' => 'required|string|max:255',
            'file' => 'required|file|mimes:pdf,docx,xlsx,jpg,png|max:10240', 
            'description' => 'nullable|string',
        ]);
	}
}
