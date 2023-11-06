<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zone;
use App\Models\Region;
use App\Models\Crop;
use App\Models\Price;
use App\Models\Agency;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Models\News;
use Illuminate\Support\Facades\Hash;
use App\Models\Message;
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
        return view('home', ['zone' => $zone, 'crops' => $crops, 'agency' => $agency, 'region' => $region, 'users' => $users, 'prices' => $prices]);
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
        $crops = Crop::orderby('name', 'asc')->get();
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
        $existingCrop = Price::where('cropID', $request->input('crop'))
            ->where('regionID', $request->input('region'))
            ->first();

        if ($existingCrop) {
            return redirect()->back()->withErrors(['message' => 'Crop already registered.']);
        }

        $validator = Validator::make($request->all(), [
            'crop' => 'required|unique:prices,cropID,NULL,id,regionID,' . $request->input('region'),
            'region' => 'required',
            'max' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            // Handle validation failure
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            // Validation passed, proceed with saving the data
            $price = new Price();
            $price->cropID = $request->input('crop');
            $price->regionID = $request->input('region');
            $price->maxprice = $request->input('max');
            $price->save();

            return redirect()->route('prices')->with('status', 'Price Registered Successfully');
        }
    }


    public function editprice($id)
    {

    }

    public function saveEditedprice(Request $request)
    {
    }

    public function manageCropsandPrices($id)
    {
    }

    public function manageNews()
    {
        $news = News::orderby('created_at', 'desc')->get();
        return view('admin.manageNews', ['news' => $news]);
    }

    public function saveNews(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $news = new News();
        $news->title = $request->input('title');
        $news->description = $request->input('description');

        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $fileName = $news->title . '_' . time() . '.' . $attachment->getClientOriginalExtension();

            // Check if the directory exists, create it if it doesn't
            $directory = 'NewsAttachments';
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }

            $attachment->move($directory, $fileName);
            $news->attachement = $fileName;
        }

        $news->save();

        return redirect()->route('manageNews')->with('status', 'News Registered Successfully');
    }

    public function saveEditedNews(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
        ]);

        $news = News::where('id', $request->input('id'))->first();
        $news->title = $request->input('title');
        $news->description = $request->input('description');

        if ($request->hasFile('attachment')) {
            $attachment = $request->file('attachment');
            $fileName = $news->title . '_' . time() . '.' . $attachment->getClientOriginalExtension();

            // Check if the directory exists, create it if it doesn't
            $directory = 'NewsAttachments';
            if (!file_exists($directory)) {
                mkdir($directory, 0777, true);
            }

            $attachment->move($directory, $fileName);
            $news->attachement = $fileName;
        }

        $news->save();

        return redirect()->route('manageNews')->with('status', 'News Updated Successfully');
    }
    public function updateprofile()
    {
        $agency = Agency::get();
        return view('admin.profile', ['agency' => $agency]);
    }

    public function saveProfile(Request $request)
    {
        $user = User::where('id', $request->id)->first();
        $user->name = $request->name;
        $user->save();
        return redirect()->back()->with(['message' => 'Profile Details Changed Successfully']);
    }

    public function changePassword(Request $request)
    {
        $validatedData = $request->validate([
            'password' => 'required|min:8|required_with:cpassword|same:cpassword',
            'cpassword' => 'min:8'

        ]);

        $user = User::where('id', $request->id)->first();
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->back()->with(['message' => 'Password Changed Successfully']);
    }

    public function importfromExcel()
    {
        $crops = Crop::get();
        return view('admin.importExcel', ['crop' => $crops]);
    }

    public function sendSMS()
    {
        $messages = Message::orderby('created_at', 'desc')->get();
        return view('admin.sendSMS', ['message' => $messages]);
    }

}
