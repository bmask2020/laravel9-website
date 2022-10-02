<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlide;
use App\Models\About;

class FrontendController extends Controller
{
    
    public function index() {

        $HomeSlide = HomeSlide::find(1);
        $About = About::find(1);
        return view('frontend.index', compact('HomeSlide', 'About'));

    }


    public function about() {

        $About = About::find(1);
        return view('frontend.about', compact('About'));
    }
}
