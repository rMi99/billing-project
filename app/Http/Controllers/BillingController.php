<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BillingController extends Controller
{


    public function billingPage()
    {
        return view('billing');
    }
    
    
}