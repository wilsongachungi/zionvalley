<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellController extends Controller
{
       public function sells(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'amount' => 'required|numeric',
            'rate' => 'required|numeric',
        ]);

        $buy = new Sell();
        $buy->user_id = auth()->id(); 
        $buy->amount = $validatedData['amount'];
        $buy->rate = $validatedData['rate'];
        $buy->save();
       
        return redirect()->back()->with('success', 'Buy data stored successfully!');
    }
}
