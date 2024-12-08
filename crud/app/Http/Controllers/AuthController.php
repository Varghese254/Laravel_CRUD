<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    
    public function register()
    {
        return view('register');
    }

    public function registerpost(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:300',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|string|min:4'
        ]);

        $user=new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=$request->password;
        $user->save();
        return back()->with('success','Registered successfully');
    }
}
