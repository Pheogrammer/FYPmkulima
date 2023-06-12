<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Price;

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
        $region = Price::where('regionID', $id)->first();
        $beimazao = Price::where('regionID', $id)->orderBy('starting_at', 'desc')->get()->groupBy('starting_at');
        return view('beimikoa', ['beimazao' => $beimazao, 'region' => $region]);
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

    public function weather(){
        return view('weather');
    }
}
