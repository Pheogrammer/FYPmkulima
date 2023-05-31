<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;
use App\Models\Region;
use App\Models\Crop;
use App\Models\Price;
use App\Models\Agency;
use App\Models\User;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return redirect()->route('prices');
        $zone = Zone::orderby('name', 'asc')->get();
        $crops = Crop::orderby('name', 'asc')->get();
        $agency = Agency::orderby('agencyName', 'asc')->get();
        $region = Region::orderby('name', 'asc')->get();
        $users = User::orderby('name', 'asc')->get();
        $prices = Price::distinct('published_at')->get();
        return view('home',['zone'=>$zone,'crops'=>$crops,'agency'=>$agency,'region'=>$region,'users'=>$users,'prices'=>$prices]);
    }
    public function settings()
    {
        return view('admin.settings');
    }

    public function zone()
    {
        $zone = Zone::orderby('name', 'asc')->withCount('regions')->get();
        return view('admin.zone', ['zone' => $zone]);
    }

    public function registerzone()
    {
        return view('admin.registerzone');
    }

    public function saveRegisteredZone(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:zones|max:255',

        ]);

        $zone = new Zone();
        $zone->name = $request->input('name');
        $zone->save();

        return redirect()->route('zone')->with('status', 'Zone Registered Successfully');
    }

    public function editzone($id)
    {
        $zone = Zone::where('id', $id)->first();
        $region = Region::where('zoneID', $id)->get();
        return view('admin.editzone', ['zone' => $zone, 'regionAssigned' => $region]);
    }

    public function assignRegiontoZone($id)
    {
        $region = Region::where('zoneID', $id)->get();
        $zone = Zone::where('id', $id)->first();
        $regions = Region::whereNotIn('id', $region->pluck('id'))->orderBy('name', 'asc')->get();

        return view('admin.assignregiontozone', ['zone' => $zone, 'regions' => $regions]);
    }

    public function saveAssignedRegion(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $region = Region::where('id', $request->input('name'))->first();
        $region->zoneID = $request->input('id');
        $region->save();

        return redirect()->route('editzone', $request->input('id'))->with('status', 'Region Assigned Successfully');
    }

    public function saveEditedZone(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $zone = Zone::where('id', $request->input('id'))->first();
        $zone->name = $request->input('name');
        $zone->save();
        return redirect()->route('zone')->with('status', 'Zone Updated Successfully');
    }

    public function region()
    {
        $region = Region::orderby('name', 'asc')->with('zone')->get();
        return view('admin.regions', ['region' => $region]);
    }

    public function registerRegion()
    {
        $zone = Zone::orderby('name', 'asc')->get();
        return view('admin.registerregion', ['zone' => $zone]);
    }

    public function saveRegisteredRegion(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:regions|max:255',
            'zoneID' => 'required',
        ]);

        $region = new Region();
        $region->name = $request->input('name');
        $region->zoneID = $request->input('zoneID');
        $region->save();

        return redirect()->route('region')->with('status', 'Region Registered Successfully');
    }

    public function editRegion($id)
    {
        $region = Region::where('id', $id)->first();
        $zone = Zone::orderby('name', 'asc')->get();
        return view('admin.editregions', ['region' => $region, 'zone' => $zone]);
    }

    public function saveEditedRegion(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'zoneID' => 'required',
        ]);

        $region = Region::where('id', $request->input('id'))->first();
        $region->name = $request->input('name');
        $region->zoneID = $request->input('zoneID');
        $region->save();

        return redirect()->route('region')->with('status', 'Region Updated Successfully');
    }

    public function crops()
    {
        $crops  = Crop::orderby('name', 'asc')->get();
        return view('admin.crops', ['crop' => $crops]);
    }

    public function registerCrop()
    {
        return view('admin.registercrop');
    }

    public function saveRegisteredCrop(Request $request)
    {
        $crop = new Crop();
        $crop->name = $request->input('name');
        $crop->save();

        return redirect()->route('crops')->with('status', 'Crop Registered Successfully');
    }
    public function editcrop($id)
    {
        $crop = Crop::where('id', $id)->first();
        return view('admin.editcrop', ['crop' => $crop]);
    }

    public function saveeditedcrop(Request $request)
    {
        $crop = Crop::where('id', $request->input('id'))->first();
        $crop->name = $request->input('name');
        $crop->save();

        return redirect()->route('crops')->with('status', 'Crop Updated Successfully');
    }

    public function prices()
    {
        $regions = Region::orderby('name', 'asc')->with('zone')->get();
        return view('admin.prices', ['region' => $regions]);
    }

    public function registerprice()
    {
        $region = Region::orderby('name', 'asc')->get();
        $agency = Agency::orderby('agencyName', 'asc')->get();
        $crop = Crop::orderby('name', 'asc')->get();

        return view('admin.registerpice', ['region' => $region, 'agency' => $agency, 'crop' => $crop]);
    }

    public function saveRegisteredPrice(Request $request)
    {
        $validatedData = $request->validate([
            'crop' => 'required|max:255',
            'region' => 'required',
            'agency' => 'required',
            'starting' => 'required',
            'min' => 'required',
            'max' => 'required',
        ]);

        $existingCrop = Price::where('cropID', $request->input('crop'))
    ->where('regionID', $request->input('region'))
    ->where('agencyID',$request->input('agency'))
    ->where('starting_at',  $request->input('starting'))
    ->first();

if ($existingCrop) {
    return redirect()->back()->withErrors(['error' => 'Crop already registered.']);
}

        $price = new Price();
        $price->cropID = $request->input('crop');
        $price->agencyID = $request->input('agency');
        $price->regionID = $request->input('region');
        $price->minprice = $request->input('min');
        $price->maxprice = $request->input('max');
        $price->starting_at = $request->input('starting');
        $price->save();

        return redirect()->route('prices')->with('status', 'Price Registered Successfully');
    }

    public function editprice($id)
    {
    //     $existingCrop = Price::where('crop', $validatedData['crop'])
    // ->where('region', $validatedData['region'])
    // ->where('agency', $validatedData['agency'])
    // ->where('starting', $validatedData['starting'])
    // ->first();

if ($existingCrop) {
    return redirect()->back()->withErrors(['error' => 'Crop already registered.']);
}
    }

    public function saveEditedprice(Request $request)
    {
    }

    public function manageCropsandPrices($id)
    {
    }
}
