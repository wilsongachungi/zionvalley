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
			array()
		);
	}
}
