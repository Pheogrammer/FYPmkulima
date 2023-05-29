<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::orderby('name','asc')->get();
        return view('admin.users',['users'=>$users]);
    }
}
