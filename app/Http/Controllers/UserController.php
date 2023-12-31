<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home() {
        $cours
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
    public function principlehome(){
        return view ('principlehome');
    }
    public function userLogin(Request $req) {
        $req->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $alluser = User::where('email' , '=',$req->email)->first();
        
        if($alluser)
        
        {
            if($alluser->email=="principle@gmail.com"){
                if($alluser->password==$req->password){
                    return redirect('/principlehome');
                }
            }else{
            if($alluser->password == $req->password){
                return redirect('/home');
            }else{
                return back()->with('password','Wrong password!!!');
            }
        }
        } else {
            return back()->with('email','Invalid email!!!');
        }

    }
}
