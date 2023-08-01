<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Models\Price;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CropPricesImport;
use App\Models\Crop;

class DocumentsController extends Controller
{
    //
    public function generatepdfforprice($id)
    {
        $region = Price::where('regionID', $id)->first();
        $beimazao = Price::where('regionID', $id)->orderBy('starting_at', 'desc')->get()->groupBy('starting_at');

        $data = compact('region', 'beimazao');
        $pdf = Pdf::loadView('pricepdf', $data);
        return $pdf->download("prices.pdf");




        // return view('beimikoa', ['beimazao' => $beimazao, 'region' => $region]);
    }

    public function importPrices(Request $request)
    {
        $request->validate([
            'file' => 'required|mimetypes:application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
            'crop' => 'required|exists:crops,id',
        ]);

        $cropID = $request->input('crop');
        $file = $request->file('file');

        // Import data using the new import class
        $import = new CropPricesImport($cropID);
        Excel::import($import, $file);

        return redirect()->route('prices')->with('status', 'Crop prices imported successfully.');
    }
}
