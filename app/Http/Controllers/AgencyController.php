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
}
