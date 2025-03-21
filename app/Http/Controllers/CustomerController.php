<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function customerView():String{
        return view('pages.dashboard.customer');
    }
}
