<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class CountryController extends Controller
{
	public function getCountries()
    {
        try {
            $response = Http::get('https://restcountries.com/v3.1/all');

            if ($response->failed()) {
                Log::error('Failed to fetch countries', ['response' => $response->body()]);
                return response()->json(['error' => 'Failed to fetch countries'], 500);
            }

            $countries = collect($response->json())->map(function ($country) {
                return [
                    'name' => $country['name']['common'] ?? 'Unknown',
                    'code' => isset($country['idd']) ? ($country['idd']['root'] ?? '') . ($country['idd']['suffixes'][0] ?? '') : 'N/A',
                    'flag' => $country['flags']['png'] ?? '',
                ];
            });

            return response()->json($countries);
        } catch (\Exception $e) {
            Log::error('API Error:', ['message' => $e->getMessage()]);
            return response()->json(['error' => 'Something went wrong!'], 500);
        }
    }
}
