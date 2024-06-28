<?php

namespace App\Http\Controllers;

use App\Models\Identify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;


class IdentifyController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'identify_data' => 'required|string',
        ]);

        $identify = new Identify();
        $identify->identify_data = $validatedData['identify_data'];
        $identify->user_id = auth()->id();
        $identify->save();


        session(['identify_submitted' => true]);

        return redirect()->back()->with('success', 'Identify data saved successfully!');
    }
}
