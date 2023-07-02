<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AfricasTalking\SDK\AfricasTalking;

class SMSandUSSDController extends Controller
{
    //
    public function sendSMS()
    {
        $username = 'YOUR_USERNAME';
        $apiKey   = 'YOUR_API_KEY';
        $AT       = new AfricasTalking($username, $apiKey);


        $sms      = $AT->sms();

        $result   = $sms->send([
            'to'      => '+2XXYYYOOO',
            'message' => 'Hello World!'
        ]);

        print_r($result);
    }
}
