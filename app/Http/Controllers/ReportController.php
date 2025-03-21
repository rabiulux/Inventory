<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportView():String{
        return view('pages.dashboard.report');
    }
}
