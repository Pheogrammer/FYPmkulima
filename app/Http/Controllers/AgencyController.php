<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AgencyController extends Controller
{
    //
    public function index()
    {
        return view('admin.agencies');
    }
}
