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

    public function registeruser()
    {
        return view('admin.registeruser');
    }

    public function saveRegisteredUser(Request $request)
    {

    }

    public function edituser($id)
    {
        $userdata = User::where('id',$id)->first();
        return view('admin.edituser',['user'=>$userdata]);
    }

    public function saveEditedUser(Request $request)
    {

    }
}
