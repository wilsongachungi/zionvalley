<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinpesaController extends Controller

{
	public function tipesaStk(Request $request)
	{
		$amount = $request->input('amount');
		$phonenuber = $request->input('phonenumber');
		$Account_no = $request->input('account_no', ''); // Handle optional account number
		$url = 'https://tinypesa.com/api/v1/express/initialize';
		$data = array(
			'amount' => $amount,
			'msisdn' => $phonenuber,
			'account_no' => $Account_no
		);
		$headers = array(
			'Content-Type: application/x-www-form-urlencoded',
			'ApiKey: OI6KaSjaVsa' // Replace with your API key
		);
		$info = http_build_query($data);
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_POST, true);
		curl_setopt($curl, CURLOPT_POSTFIELDS, $info);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		$resp = curl_exec($curl);

		// Check for CURL errors
		if ($resp === false) {
			$errorMsg = "CURL ERROR: " . curl_error($curl);
			curl_close($curl);
			return response()->json(['error' => $errorMsg]);
		} else {
			$msg_resp = json_decode($resp);
			curl_close($curl);

			// Check if the request was successful
			if (isset($msg_resp->success) && $msg_resp->success == 'true') {
				$successMsg = "✔✔ TinyPesa transaction initialized successfully. With request id " . $msg_resp->request_id;
				return response()->json(['success' => $successMsg]);
			} else {
				// Handle any errors returned by the API
				$errorMsg = "ERROR: " . $resp;
				return response()->json(['error' => $errorMsg]);
			}
		}
	}



	public function tipesaCallback()
	{
		header("Content-Type: application/json");

		$stkCallbackResponse = file_get_contents('php://input');
		$logFile = "stkTinypesaResponse.json";
		$log = fopen($logFile, "a");
		fwrite($log, $stkCallbackResponse);
		fclose($log);

		$callbackContent = json_decode($stkCallbackResponse);

		$ResultCode = $callbackContent->Body->stkCallback->ResultCode;
		$CheckoutRequestID = $callbackContent->Body->stkCallback->CheckoutRequestID;
		$Amount = $callbackContent->Body->stkCallback->CallbackMetadata->Item[0]->Value;
		$MpesaReceiptNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[1]->Value;
		$PhoneNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[4]->Value;

		if ($ResultCode == 0) {
			//STORE THE TRANSACTION IN YOUR DATABASE

		}
	}
}
