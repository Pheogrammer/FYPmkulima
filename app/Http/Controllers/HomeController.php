<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;
use App\Models\Region;
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
        return view('home');
    }
public function settings()
    {
        return view('admin.settings');
    }

    public function zone()
    {
$zone = Zone::orderby('name','asc')->withCount('regions')->get();
return view('admin.zone',['zone'=>$zone]);
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
        $zone -> name = $request->input('name');
        $zone->save();

        return redirect()->route('zone')->with('status','Zone Registered Successfully');
    }

    public function editzone($id)
    {
        $zone = Zone::where('id',$id)->first();
        $region = Region::where('zoneID', $id)->get();
        return view('admin.editzone',['zone'=>$zone,'regionAssigned'=>$region]);
    }

    public function assignRegiontoZone($id)
    {
        $region = Region::where('zoneID', $id)->get();
        $zone = Zone::where('id',$id)->first();
        $regions = Region::whereNotIn('id', $region->pluck('id'))->orderBy('name', 'asc')->get();

        return view('admin.assignregiontozone',['zone'=>$zone,'regions'=>$regions]);
    }

    public function saveAssignedRegion(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $region = Region::where('id',$request->input('name'))->first();
        $region->zoneID = $request->input('id');
        $region->save();

        return redirect()->route('editzone',$request->input('id'))->with('status','Region Assigned Successfully');
    }

    public function saveEditedZone(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
        ]);

        $zone = Zone::where('id',$request->input('id'))->first();
        $zone -> name = $request->input('name');
        $zone->save();
        return redirect()->route('zone')->with('status','Zone Updated Successfully');


    }

    public function region()
    {
$region = Region::orderby('name','asc')->with('zone')->get();
return view('admin.regions',['region'=>$region]);
    }

    public function registerRegion()
    {
        $zone = Zone::orderby('name','asc')->get();
        return view('admin.registerregion',['zone'=>$zone]);
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

        return redirect()->route('region')->with('status','Region Registered Successfully');

    }

    public function editRegion($id)
    {
        $region = Region::where('id',$id)->first();
        $zone = Zone::orderby('name','asc')->get();
        return view('admin.editregions',['region'=>$region,'zone'=>$zone]);
    }

    public function saveEditedRegion(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'zoneID' => 'required',
        ]);

        $region = Region::where('id',$request->input('id'))->first();
        $region->name = $request->input('name');
        $region->zoneID = $request->input('zoneID');
        $region->save();

        return redirect()->route('region')->with('status','Region Updated Successfully');

    }
}
