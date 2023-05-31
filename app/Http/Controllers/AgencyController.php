<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agency;
class AgencyController extends Controller
{
    //
    public function index()
    {
        $agency = Agency::orderby('agencyName','asc')->get();
        return view('admin.agencies',['agency'=>$agency]);
    }

    public function registeragency()
    {
        return view('admin.registeragency');
    }

    public function saveRegisteredAgency(Request $request)
    {
        $validatedData = $request->validate([
            'agencyName' => 'required|unique:agencies|max:255',
            'agencyPhone' => 'required|unique:agencies|max:255',
            'agencyEmail' => 'required|unique:agencies|max:255',
            'agencyWebsite' => 'required|unique:agencies|max:255',
        ]);

        $agency = new Agency();
        $agency->agencyName = $request->input('agencyName');
        $agency->agencyPhone = $request->input('agencyPhone');
        $agency->agencyEmail = $request->input('agencyEmail');
        $agency->agencyWebsite = $request->input('agencyWebsite');
        $agency->save();
        return redirect()->route('agencies')->with('status','Agency Registered Successfully');
    }

    public function editagency($id)
    {
        $agency = Agency::where('id',$id)->first();
        return view('admin.editagency',['agency'=>$agency]);
    }

    public function saveEditedAgency(Request $request)
    {
        $validatedData = $request->validate([
            'agencyName' => 'required|max:255',
            'agencyPhone' => 'required|max:255',
            'agencyEmail' => 'required|max:255',
            'agencyWebsite' => 'required|max:255',
        ]);

        $agency = Agency::where('id',$request->input('id'))->first();
        $agency->agencyName = $request->input('agencyName');
        $agency->agencyPhone = $request->input('agencyPhone');
        $agency->agencyEmail = $request->input('agencyEmail');
        $agency->agencyWebsite = $request->input('agencyWebsite');
        $agency->save();
        return redirect()->route('agencies')->with('status','Agency Updated Successfully');

    }
}
