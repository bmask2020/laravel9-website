<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;


class HomeSliderController extends Controller
{
   
    
    public function index() {

        $HomeSlide =HomeSlide::find(1);
        return view('admin.home_slide.index', compact('HomeSlide'));
        
    }

}
