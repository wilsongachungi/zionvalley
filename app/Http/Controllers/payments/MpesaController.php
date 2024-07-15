<?php

namespace App\Http\Controllers\payments;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MpesaController extends Controller
{
	public function getAccessTocken()
	{
		$url = env('MPESA_ENV') = 0
			? ''
			: '';

		$cur = curl_init($url);
		curl_setopt_array(
			$curl,
			array(
				CURLOPT_HTTPHEADER => ['content-type:application/json; charset=utf8'],
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_HEADER => false,
				CURLOPT_USERPWD => env('MPESA_CONSUMER_KEY') . ':'. env('MPESA_CONSUMER_SECRET');
			)
		);
		$response = json_decode(curl_exec($url));
		curl_close($curl);

		return $response;
	}
}
