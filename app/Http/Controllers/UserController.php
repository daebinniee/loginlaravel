<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(){
        return view('user.login');
    }

    public function process(Request $req){
        $validated = $req->validate([
            "email"=>['required','email'],
            'password'=>'required'
        ]);
        if(auth()->attempt($validate)){
            $req->session()->regenerate();
            return redirect("/");
        }
    }

    public function register(){
        return view ('user.register');
    }
}