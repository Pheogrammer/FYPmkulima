<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
