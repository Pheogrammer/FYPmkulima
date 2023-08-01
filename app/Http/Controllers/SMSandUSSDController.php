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
        $sessionId = $request->input('sessionId');
        $serviceCode = $request->input('serviceCode');
        $phoneNumber = $request->input('phoneNumber');
        $text = $request->input('text');

        $response = 'END Samahani, hatujaelewa uchaguzi wako!';


        if ($text == '') {
            $response = "CON Habari, Karibu.\n";
            $response .= "Je, ungependa kupata huduma gani?\n";
            $response .= "1. Kujua bei za mazao\n";
            $response .= "2. Kujiunga na huduma ya ujumbe mfupi kupata dondoo za kilimo";
        } else {
            $parts = explode('*', $text);

            $mainMenuOption = $parts[0];

            if ($mainMenuOption === '1') {
                if (count($parts) === 1) {
                    $response = "CON Je, upo katika kanda ipi?\n";
                    $zones = Zone::all();
                    if ($zones->count() > 0) {
                        foreach ($zones as $key => $zone) {
                            $response .= ($key + 1) . '. ' . $zone->name . "\n";
                        }
                    } else {
                        $response .= "Hakuna kanda kwa sasa.\n";
                    }
                } elseif (count($parts) === 2) {
                    $selectedZoneIndex = intval($parts[1]);
                    $regions = Region::where('zoneID', $selectedZoneIndex)->get();
                    $response = "CON Je, upo katika mkoa upi?\n";
                    if ($regions->count() > 0) {
                        foreach ($regions as $region) {
                            $response .= $region->id . '. ' . $region->name . "\n";
                        }
                    } else {
                        $response .= "Hakuna mikoa iliyosajiliwa katika kanda uliyochagua.\n";
                    }
                } elseif (count($parts) === 3) {
                    $selectedRegionID = intval($parts[2]);
                    $region = Region::find($selectedRegionID);
                    if (!$region) {
                        $response = "END Mkoa uliochagua haupatikani. Tafadhali jaribu tena.";
                    } else {
                        $cropPrices = Price::where('regionID', $selectedRegionID)->with('crop')->get();

                        if ($cropPrices->count() > 0) {
                            $totalCrops = $cropPrices->count();

                            $currentOffset = intval(end($parts)) ?: intval($parts[3] ?? 0);

                            if ($currentOffset === 0) {
                                $currentOffset = intval($parts[4] ?? 1);
                            }

                            $nextOffset = $currentOffset + 5;

                            $currentCropPrices = $cropPrices->slice($currentOffset - 1, 5);

                            $region = Region::find($selectedRegionID);
                            $response = "CON Bei za mazao " . $region['name'] . ":\n";

                            foreach ($currentCropPrices as $key => $price) {
                                $displayNumber = $key - 1;
                                $response .= $displayNumber . '. ' . $price->crop->name . " Tsh " . number_format($price->maxprice) . " \n";
                            }

                            if ($nextOffset <= $totalCrops) {
                                $response .= "Bonyeza 0 kuona mazao mengine.\n";
                            } else {
                                $response .= "Bonyeza 100 kurudi kwenye menyu kuu.\n";
                            }
                        }
                    }
                } elseif ((count($parts) === 4 && intval(end($parts)) === 0)) {
                    $selectedRegionID = intval($parts[2]);
                    $region = Region::find($selectedRegionID);
                    if (!$region) {
                        $response = "END Mkoa uliochagua haupatikani. Tafadhali jaribu tena.";
                    } else {
                        $cropPrices = Price::where('regionID', $selectedRegionID)->with('crop')->get();

                        if ($cropPrices->count() > 0) {
                            $totalCrops = $cropPrices->count();

                            $currentOffset = intval(end($parts)) ?: intval($parts[3] ?? 0);

                            if ($currentOffset === 0) {
                                $currentOffset = intval($parts[4] ?? 1);
                            }

                            $nextOffset = $currentOffset + 5;

                            $currentCropPrices = $cropPrices->slice($currentOffset - 1, 5);

                            $region = Region::find($selectedRegionID);
                            $response = "CON Bei za mazao " . $region['name'] . ":\n";

                            foreach ($currentCropPrices as $key => $price) {
                                $displayNumber = $key + 6;
                                $response .= $displayNumber . '. ' . $price->crop->name . " Tsh " . number_format($price->maxprice) . " \n";
                            }

                            if ($nextOffset <= $totalCrops) {
                                $response .= "Bonyeza 0 kuona mazao mengine.\n";
                            } else {
                                $response .= "Bonyeza 100 kurudi kwenye menyu kuu.\n";
                            }
                        }
                    }
                } else {
                    $response = "END Taarifa uliyoomba haipo, tafadhali jaribu tena";
                }
            }

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
