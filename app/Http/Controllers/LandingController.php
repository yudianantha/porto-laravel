<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function home()
    {
        return view('landing.home');
    }

    public function about_us()
    {
        return view('landing.about-us');
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
