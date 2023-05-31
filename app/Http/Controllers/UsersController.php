<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agency;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    //
    public function index()
    {
        $users = User::orderby('name','asc')->with('agency')->get();
        return view('admin.users',['users'=>$users]);
    }

    public function registeruser()
    {
        $agency = Agency::orderby('agencyName','asc')->get();
        return view('admin.registeruser',['agency'=>$agency]);
    }

    public function saveRegisteredUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|unique:users|max:255',
            'userType' => 'required|max:255',
            'agencyID' => 'required|max:255',
            'phone' => ['required', 'unique:users', 'regex:/^(?:\+|0|255)\d{9}(?:\d{4})?$/'],
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->userType = $request->input('userType');
        $user->agencyID = $request->input('agencyID');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->password = Hash::make($request->input('email'));
        $user->save();
        return redirect()->route('users')->with('status','User Registered Successfully');
    }

    public function edituser($id)
    {
        $agency = Agency::orderby('agencyName','asc')->get();
        $userdata = User::where('id',$id)->first();
        return view('admin.edituser',['user'=>$userdata,'agency'=>$agency]);
    }

    public function saveEditedUser(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'userType' => 'required|max:255',
            'agencyID' => 'required|max:255',
            'phone' => ['required','regex:/^(?:\+|0|255)\d{9}(?:\d{4})?$/'],
        ]);

        $user = User::where('id',$request->id)->first();
        $user->name = $request->input('name');
        $user->userType = $request->input('userType');
        $user->agencyID = $request->input('agencyID');
        $user->phone = $request->input('phone');
        $user->save();
        return redirect()->route('users')->with('status','User '.$request->input('name').' Updated Successfully');

    }

    public function deactivateUser($id)
    {
        $user = User::where('id',$id)->first();
        $user->status = 0;
        $user->save();

        return redirect()->route('users')->with('status','User '.$user['name'].' Deactivated Successfully');
    }

    public function activateUser($id)
    {
        $user = User::where('id',$id)->first();
        $user->status = 1;
        $user->save();

        return redirect()->route('users')->with('status','User '.$user['name'].' Activated Successfully');
    }
}
