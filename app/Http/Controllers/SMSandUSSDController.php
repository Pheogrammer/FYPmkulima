<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Zone;
use App\Models\Price;
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

        } elseif (strpos($text, '1*1') === 0) {
            $selectedZoneIndex = 1;

            $regions = Region::where('zoneID', $selectedZoneIndex)->get();

            $response = "CON Je, upo katika mkoa upi?\n";

            if ($regions->count() > 0) {
                foreach ($regions as $key => $region) {
                    $response .= ($key + 1) . '. ' . $region->name . "\n";
                }
            } else {
                $response .= "Hakuna mikoa iliyosajiliwa katika kanda uliyochagua.\n";
            }

        } elseif (strpos($text, '1*2') === 0) {
            $selectedZoneIndex = 2;

            $regions = Region::where('zoneID', $selectedZoneIndex)->get();

            $response = "CON Je, upo katika mkoa upi?\n";

            if ($regions->count() > 0) {
                foreach ($regions as $key => $region) {
                    $response .= ($key + 1) . '. ' . $region->name . "\n";
                }
            } else {
                $response .= "Hakuna mikoa iliyosajiliwa katika kanda uliyochagua.\n";
            }

        } elseif (strpos($text, '1*3') === 0) {
            $selectedZoneIndex = 3;

            $regions = Region::where('zoneID', $selectedZoneIndex)->get();

            $response = "CON Je, upo katika mkoa upi?\n";

            if ($regions->count() > 0) {
                foreach ($regions as $key => $region) {
                    $response .= ($key + 1) . '. ' . $region->name . "\n";
                }
            } else {
                $response .= "Hakuna mikoa iliyosajiliwa katika kanda uliyochagua.\n";
            }

        } elseif (strpos($text, '1*4') === 0) {
            $selectedZoneIndex = 4;

            $regions = Region::where('zoneID', $selectedZoneIndex)->get();

            $response = "CON Je, upo katika mkoa upi?\n";

            if ($regions->count() > 0) {
                foreach ($regions as $key => $region) {
                    $response .= ($key + 1) . '. ' . $region->name . "\n";
                }
            } else {
                $response .= "Hakuna mikoa iliyosajiliwa katika kanda uliyochagua.\n";
            }

        } elseif (strpos($text, '1*5') === 0) {
            $selectedZoneIndex = 5;

            $regions = Region::where('zoneID', $selectedZoneIndex)->get();

            $response = "CON Je, upo katika mkoa upi?\n";

            if ($regions->count() > 0) {
                foreach ($regions as $key => $region) {
                    $response .= ($key + 1) . '. ' . $region->name . "\n";
                }
            } else {
                $response .= "Hakuna mikoa iliyosajiliwa katika kanda uliyochagua.\n";
            }

        } elseif (strpos($text, '1*6') === 0) {
            $selectedZoneIndex = 6;

            $regions = Region::where('zoneID', $selectedZoneIndex)->get();

            $response = "CON Je, upo katika mkoa upi?\n";

            if ($regions->count() > 0) {
                foreach ($regions as $key => $region) {
                    $response .= ($key + 1) . '. ' . $region->name . "\n";
                }
            } else {
                $response .= "Hakuna mikoa iliyosajiliwa katika kanda uliyochagua.\n";
            }

        } elseif (strpos($text, '1*7') === 0) {
            $selectedZoneIndex = 7;

            $regions = Region::where('zoneID', $selectedZoneIndex)->get();

            $response = "CON Je, upo katika mkoa upi?\n";

            if ($regions->count() > 0) {
                foreach ($regions as $key => $region) {
                    $response .= ($key + 1) . '. ' . $region->name . "\n";
                }
            } else {
                $response .= "Hakuna mikoa iliyosajiliwa katika kanda uliyochagua.\n";
            }

        }  else {
            $response = "END Taarifa uliyoomba haipo, tafadhali jaribu tena";
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
