<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Price;
use GuzzleHttp\Client;
use App\Models\Crop;

class ViewerController extends Controller
{
    //
    public function bei()
    {
        $bei = Price::select('regionID')->distinct()->get();
        return view('bei', ['bei' => $bei]);
    }
    public function beimazao($id)
    {
        $region = Price::where('regionID', $id)->with('crop')->first();
        $beimazao = Price::where('regionID', $id)->with('crop')->get();
        return view('beimikoa', ['beimazao' => $beimazao, 'region' => $region,'id'=>$id]);
    }

    public function news()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(12);
        return view('news', ['news' => $news]);
    }

    public function newsdetails($id)
    {
        $news = News::where('id', $id)->first();
        return view('ReadNews', ['news' => $news]);
    }

    public function weather()
    {
        return view('weather');
    }

    public function weatherData(Request $request)
    {
        $region = $request->input('region');
        $apiKey = env('OPEN_WEATHER_API_KEY');

        // Make API request to OpenWeatherMap for weather forecast using Guzzle
        $client = new Client(
            ['verify'=>false,]
        );

        $response = $client->get('https://api.openweathermap.org/data/2.5/forecast', [
            'query' => [
                'q' => $region,
                'cnt' => 30,
                'appid' => $apiKey,
            ],
        ]);

        $weatherData = json_decode($response->getBody(), true);

        return response()->json($weatherData);
    }
}
