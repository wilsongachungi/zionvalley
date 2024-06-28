<?php

namespace App\Http\Controllers;

use App\Models\Buy;
use Illuminate\Http\Request;

class BuyController extends Controller
{
    public function buys(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'rate' => 'required|numeric',
        ]);

        // Create a new Buy instance and save it to the database
        $buy = new Buy();
        $buy->user_id = auth()->id(); // Assuming you're using Laravel's built-in authentication
        $buy->amount = $validatedData['amount'];
        $buy->rate = $validatedData['rate'];
        $buy->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Buy data stored successfully!');
    }
}
