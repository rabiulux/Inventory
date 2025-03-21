<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function registration(){
        return view('pages.auth.registration');
    }
    public function login(){
        return view('pages.auth.login');
    }
    public function reset(){
        return view('pages.auth.reset');
    }

    public function otp(){
        return view('pages.auth.otp');
    }

    public function otpVerify(){
        return view('pages.auth.otpVerify');
    }

    public function profile(){
        return view('pages.dashboard.profile');
    }
}
