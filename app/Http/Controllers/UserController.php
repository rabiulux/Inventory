<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\PrettyPrinter\Standard;

class UserController extends Controller
{
    public function registrationView():String{
        return view('pages.auth.registration');
    }
    public function loginView():String{
        return view('pages.auth.login');
    }
    public function resetView():String{
        return view('pages.auth.reset');
    }

    public function otpView():String{
        return view('pages.auth.otp');
    }

    public function otpVerifyView():String{
        return view('pages.auth.otpVerify');
    }

    public function profileView():String{
        return view('pages.dashboard.profile');
    }
}
