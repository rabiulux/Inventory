<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function productView():String {
        return view('pages.dashboard.product');
    }
}
