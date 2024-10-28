<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    //
    public function about(){
        
        return view('/landingpages/about');
    }

    public function services(){
        
        return view('/landingpages/services');
    }
}
