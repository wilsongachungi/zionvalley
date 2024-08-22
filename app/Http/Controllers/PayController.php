<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

// class PayController extends Controller
// {
//     public function stk()
//     {
//         $mpesa= new \Safaricom\Mpesa\Mpesa();

// $stkPushSimulation=$mpesa->STKPushSimulation(
//     $BusinessShortCode = '174379',
//     $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919',
//     $TransactionType = 'CustomerPaybillOnline',
//     $Amount = '1',
//     $PartyA = '254791193343',
//     $PartyB = '174379',
//     $PhoneNumber = '254791193343' ,
//     $CallBackURL = 'https://yourcallbackurl.com/callback',
//     $AccountReference = 'AccountReference',
//     $TransactionDesc = 'TransactiuonDesc',
//     $Remarks = 'Remarks');

//     dd($stkPushSimulation);
//     }
// }
