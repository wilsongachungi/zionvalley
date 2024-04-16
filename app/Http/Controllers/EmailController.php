<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function send_question(Request $request)
    {
        
        $request->validate([
            'question' => 'required|string',
        ]);

        // Send email using Laravel's Mail facade
        Mail::to('zionvalleykenya@gmail.com')->send(new QuestionMail($request->question));

        // Save the question in the database
        $question = new Question();
        $question->question = $request->question;
        $question->save();

        return redirect()->back()->with('success', 'Question sent successfully.');
    }

    public function displayQuestions()
    {
        $questions = Question::all();
        return view('questions', ['questions' => $questions]);
    }
}
