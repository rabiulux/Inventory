<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function invoiceView():String{
        return view('pages.dashboard.invoice');
    }
}
