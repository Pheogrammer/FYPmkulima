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

        // ... (your existing code)

        if ($text == '') {
            // This is the first request
            $response = "CON Habari, Karibu.\n";
            $response .= "Je, ungependa kupata huduma gani?\n";
            $response .= "1. Kujua bei za mazao\n";
            $response .= "2. Kujiunga na huduma ya ujumbe mfupi kupata dondoo za kilimo";
        } else {
            // Explode the text to get the different parts
            $parts = explode('*', $text);

            // Get the first part of the user input
            $mainMenuOption = $parts[0];

            if ($mainMenuOption === '1') {
                if (count($parts) === 1) {
                    // Show zones
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
                    // Show regions for the selected zone
                    $selectedZoneIndex = intval($parts[1]);
                    $regions = Region::where('zoneID', $selectedZoneIndex)->get();
                    $response = "CON Je, upo katika mkoa upi?\n";
                    if ($regions->count() > 0) {
                        foreach ($regions as $region) {
                            $response .= $region->id . '. ' . $region->name . "\n"; // Display the region ID instead of SN
                        }
                    } else {
                        $response .= "Hakuna mikoa iliyosajiliwa katika kanda uliyochagua.\n";
                    }
                } elseif (count($parts) === 3) {
                    // Show crops for the selected region
                    $selectedRegionID = intval($parts[2]); // Use the selected region ID from the user input
                    $region = Region::find($selectedRegionID); // Fetch the region directly using the ID
                    if (!$region) {
                        // Invalid region ID
                        $response = "END Mkoa uliochagua haupatikani. Tafadhali jaribu tena.";
                    } else {
                        $cropPrices = Price::where('regionID', $selectedRegionID)->with('crop')->get();

                        // Check if there are crops to display
                        if ($cropPrices->count() > 0) {
                            // Calculate the total number of crops
                            $totalCrops = $cropPrices->count();

                            // Calculate the current offset based on user input
                            $currentOffset = intval(end($parts)) ?: intval($parts[3] ?? 0);

                            // Check if the user responded with 0 to fetch the next group of crops
                            if ($currentOffset === 0) {
                                // If the user entered 0, update the offset to fetch the next group of crops
                                $currentOffset = intval($parts[4] ?? 1); // Use the next part as the new offset
                            }

                            // Calculate the next offset
                            $nextOffset = $currentOffset + 5;

                            // Get the current group of crops to display
                            $currentCropPrices = $cropPrices->slice($currentOffset - 1, 5);

                            // Prepare the response
                            $region = Region::find($selectedRegionID);
                            $response = "CON Bei za mazao " . $region['name'] . ":\n";

                            foreach ($currentCropPrices as $key => $price) {
                                $displayNumber = $key - 1;
                                $response .= $displayNumber . '. ' . $price->crop->name . " Tsh " . number_format($price->maxprice) . " \n";
                            }

                            // Check if there are more crops to display
                            if ($nextOffset <= $totalCrops) {
                                // If there are more crops, show the option to see the next list
                                $response .= "Bonyeza 0 kuona mazao mengine.\n";
                            } else {
                                // If there are no more crops, show the option to go back to the main menu or exit
                                $response .= "Bonyeza 100 kurudi kwenye menyu kuu.\n";
                            }
                        }
                    }
                } elseif ((count($parts) === 4 && intval(end($parts)) === 0)) {
                    // Show crops for the selected region
                    $selectedRegionID = intval($parts[2]); // Use the selected region ID from the user input
                    $region = Region::find($selectedRegionID); // Fetch the region directly using the ID
                    if (!$region) {
                        // Invalid region ID
                        $response = "END Mkoa uliochagua haupatikani. Tafadhali jaribu tena.";
                    } else {
                        $cropPrices = Price::where('regionID', $selectedRegionID)->with('crop')->get();

                        // Check if there are crops to display
                        if ($cropPrices->count() > 0) {
                            // Calculate the total number of crops
                            $totalCrops = $cropPrices->count();

                            // Calculate the current offset based on user input
                            $currentOffset = intval(end($parts)) ?: intval($parts[3] ?? 0);

                            // Check if the user responded with 0 to fetch the next group of crops
                            if ($currentOffset === 0) {
                                // If the user entered 0, update the offset to fetch the next group of crops
                                $currentOffset = intval($parts[4] ?? 1); // Use the next part as the new offset
                            }

                            // Calculate the next offset
                            $nextOffset = $currentOffset + 5;

                            // Get the current group of crops to display
                            $currentCropPrices = $cropPrices->slice($currentOffset - 1, 5);

                            // Prepare the response
                            $region = Region::find($selectedRegionID);
                            $response = "CON Bei za mazao " . $region['name'] . ":\n";

                            foreach ($currentCropPrices as $key => $price) {
                                $displayNumber = $key + 6;
                                $response .= $displayNumber . '. ' . $price->crop->name . " Tsh " . number_format($price->maxprice) . " \n";
                            }

                            // Check if there are more crops to display
                            if ($nextOffset <= $totalCrops) {
                                // If there are more crops, show the option to see the next list
                                $response .= "Bonyeza 0 kuona mazao mengine.\n";
                            } else {
                                // If there are no more crops, show the option to go back to the main menu or exit
                                $response .= "Bonyeza 100 kurudi kwenye menyu kuu.\n";
                            }
                        }
                    }
                } else {
                    // Invalid input at this level
                    $response = "END Taarifa uliyoomba haipo, tafadhali jaribu tena";
                }
            }

            // ... (your existing code)
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
