<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Mail\QuestionMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class QuestionController extends Controller
{
    // public function send_question(Request $request)
    // {
    //     // Validate and store the question in the database
    //     $request->validate([
    //         'question' => 'required|string',
    //     ]);

    //     $question = Question::create([
    //         'question' => $request->input('question'),
    //     ]);

    //     // Send email using Laravel's Mail facade
    //     Mail::to('gachungiwilson91@gmail.com')->send(new QuestionMail($question));

    //     return redirect()->back()->with('success', 'Question sent successfully.');
    // }
}
