<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function documents()
	{
		return view('user.documents');
	}
}
