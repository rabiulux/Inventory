<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function dashboardView():String{
       return view('pages.dashboard.dashboard');
   }
}
