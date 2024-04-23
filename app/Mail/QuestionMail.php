<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\QuestionEmail;

class QuestionController extends Controller
{
    public function send_question(Request $request)
    {
      
        $request->validate([
            'question' => 'required|string',
        ]);

        Mail::to('gachungiwilson91@gmail.com')->send(new QuestionEmail($request->question));

        return redirect()->back()->with('success', 'Question sent successfully.');
    }
}
