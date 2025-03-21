<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categoryView():String{
        return view('pages.dashboard.category');
    }

}
