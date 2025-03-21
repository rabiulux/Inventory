<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    public function saleView():String {
        return view('pages.dashboard.sale');
    }
}
