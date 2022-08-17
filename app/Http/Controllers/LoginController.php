<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class LoginController extends Controller
{
    //

    public function index(){
        return view("auth.login");
    }

    public function dashboard(){
        return view("dashboard");
    }

    public function logueo(Request $creds)
    {
        if (Auth::attempt($creds->only(['email', 'password']))) {
            request()->session()->regenerate();
            return redirect("dashboard"); 
        } else { 
            return view("auth.login");
        }
    }
}
