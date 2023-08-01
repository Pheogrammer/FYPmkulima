<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Zone;
use AfricasTalking\SDK\AfricasTalking;

class SMSandUSSDController extends Controller
{

    public function ussd(Request $request)
    {
        // Extract variables from the request
        $sessionId = $request->input('sessionId');
        $serviceCode = $request->input('serviceCode');
        $phoneNumber = $request->input('phoneNumber');
        $text = $request->input('text');

        // Initialize the response variable
        $response = 'CON Hello!';

        if ($text == '') {
            // This is the first request
            $response = "CON Habari, Karibu.\n";
            $response .= "Je, ungependa kupata huduma gani?\n";
            $response .= "1. Kujua bei za mazao\n";
            $response .= "2. Kujiunga na huduma ya ujumbe mfupi kupata dondoo za kilimo";
        } elseif ($text == '1') {
            $response = "CON Je, upo katika kanda ipi?\n";
            $zone = Zone::all();
            if ($zone->count() > 0) {
                foreach ($zone as $key => $zone) {
                    $response .= ($key + 1) . '. ' . $zone->name . "\n";
                }
            } else {
                $response .= "Hakuna kanda kwa sasa.\n";
            }

        } elseif (strpos($text, '1*') === 0) {
            $selectedZoneIndex = intval(substr($text, 2));

            $regions = Region::where('zoneID', $selectedZoneIndex)->get();

            $response = "CON Je, upo katika mkoa upi?\n";

            if ($regions->count() > 0) {
                foreach ($regions as $key => $region) {
                    $response .= ($key + 1) . '. ' . $region->name . "\n";
                }
            } else {
                $response .= "No regions available for the selected zone.\n";
            }

        } elseif ($text == '1*2') {
            // Handle second level response for farming services
            $response = "CON Je, upo katika kanda ipi?\n";
            $response .= "1. Mashariki";
        } elseif ($text == '1*1*1') {
            // Handle third level response for farming services
            $response = "END Kutokana na hali ya hewa, Mazao yafaayo kulimwa mwezi huu wa :\n";
            $response .= "a) Nyanya\n";
            $response .= "b) Mahindi\n";
            $response .= "c) Mihogo\n";
            $response .= "d) Maembe";
        } elseif ($text == '1*2*1') {
            // Handle third level response for farming services
            $response = "END Kutokana na hali ya hewa, Magonjwa yawezayo tokea mwezi huu wa :\n";
            $response .= "a) Ukungu\n";
            $response .= "b) Viwavi\n";
            $response .= "c) Minyoo\n\n";
            $response .= "Jiandae kutafuta dawa kutoka kwa wauzaji walio karibu yako";
        } elseif ($text == '1*1*2') {
            $response = "END Kutokana na hali ya hewa, Mazao yafaayo kulimwa mwezi huu wa :\n";
            $response .= "a) Ndizi\n";
            $response .= "b) Mahindi\n";
            $response .= "c) Maharage\n";
            $response .= "d) Karoti\n";
            $response .= "e) Vitunguu";
        } elseif ($text == '1*1*3') {
            $response = "END Kutokana na hali ya hewa, Mazao yafaayo kulimwa mwezi huu wa :\n";
            $response .= "a) Ndizi\n";
            $response .= "b) Mahindi\n";
            $response .= "c) Maharage\n";
            $response .= "d) Karoti\n";
            $response .= "e) Vitunguu";
        } elseif ($text == '1*1*4') {
            $response = "END Kutokana na hali ya hewa, Mazao yafaayo kulimwa mwezi huu wa :\n";
            $response .= "a) Alizeti\n";
            $response .= "b) Viazi\n";
            $response .= "c) Maharage\n";
            $response .= "d) Mahindi\n";
            $response .= "e) Mchele";
        } elseif ($text == '2') {
            $response = "CON Huduma ipi ya ufugaji unapenda kuipata?\n";
            $response .= "1. Magonjwa yawezayo tokea mwezi huu\n";
            $response .= "2. Kujiunga na huduma ya ujumbe mfupi";
        } elseif ($text == '2*1') {
            $response = "CON Je, upo katika kanda ipi?\n";
            $response .= "1. Mashariki";
        } elseif ($text == '1*3' || $text == '2*2') {
            // Send SMS message
            $this->sendSMS($phoneNumber, "Asante kwa kujiunga na huduma hii, utapata taarifa za kilimo na ufugaji kila wiki. Utakatwa shilingi 1 kwa kila ujumbe");
            $response = "END Asante kwa kujiunga na huduma hii, utapata taarifa za kilimo na ufugaji kila wiki. Utakatwa shilingi 1 kwa kila ujumbe";
        } elseif ($text == '2*1*1') {
            $response = "END Magonjwa yanayoweza kutokea mwezi huu wa :\n";
            $response .= "a) Mdondo\n";
            $response .= "b) Kideri\n";
            $response .= "c) Minyoo\n";
            $response .= "d) Mafua\n\n";
            $response .= "Hakikisha unawasiliana na daktari wa karibu haraka";
        }


        // Send the response back to the API
        return response($response)->header('Content-Type', 'text/plain');
    }

    private function sendSMS($phoneNumber, $message)
    {
        // Set your app credentials
        $credentials = [
            'apiKey' => env('App_APIKEY'),
            'username' => env('USERNAME', 'ForFarmer'),
        ];

        // Initialize the SDK
        $AT = new \AfricasTalking\SDK\AfricasTalking($credentials);


        // Get the SMS service
        $sms = $AT->sms();

        // Set your shortCode or senderId
        $from = 'AgroInfo';

        // Set the numbers you want to send to in international format
        $to = ['+' . $phoneNumber];

        // Set the message
        $message = $message;

        // Send the message
        $sms->send([
            'to' => $to,
            'message' => $message,
            'from' => $from,
        ]);
    }
}
