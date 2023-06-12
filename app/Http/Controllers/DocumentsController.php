<?php

namespace App\Http\Controllers;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Price;

class DocumentsController extends Controller
{
    //
    public function generatepdfforprice($id)
    {
        $region = Price::where('regionID', $id)->first();
        $beimazao = Price::where('regionID', $id)->orderBy('starting_at', 'desc')->get()->groupBy('starting_at');

        $data = compact('region','beimazao');
        $pdf=Pdf::loadView('pricepdf', $data);
        return $pdf->download("prices.pdf");
        



        // return view('beimikoa', ['beimazao' => $beimazao, 'region' => $region]);
    }
}
