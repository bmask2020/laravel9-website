<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeSlide;

class FrontendController extends Controller
{
    
    public function index() {

        $HomeSlide = HomeSlide::find(1);
        return view('frontend.index', compact('HomeSlide'));

    }
}
