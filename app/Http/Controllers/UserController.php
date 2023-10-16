<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home() {
        return view('home');
    }
    public function login() {
        return view('login');
    }
    public function signup() {
        return view('signup');
    }
    public function Register(Request $req) {
        $req->validate([
            'username' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);
        $user = new User();
        $user->name = $req->username;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();
        
        return view('login');
    }
    public function userLogin(Request $req) {
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $alluser = User::where('email' , '=',$req->email)->first();
        if($alluser){
            if($alluser->password == $req->password){
                return redirect('/home');
            }else{
                return back();
            }
        } else {
            return back();
        }

    }
}
