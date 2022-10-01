<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomeSlide;
use Carbon\Carbon;
use Image;


class HomeSliderController extends Controller
{
   
    
    public function index() {

        $HomeSlide = HomeSlide::find(1);
        return view('admin.home_slide.index', compact('HomeSlide'));
        
    }


    public function update_home_slide(Request $request) {


        $validated = $request->validate([

            'title'         => 'required',
            'short_title'   => 'required',
            'video_url'     => 'required',
            'silde_image'   => 'required|mimes:jpeg,jpg,png,gif'

        ]);

        $id = $request->id;
        $image = $request->file('silde_image');
        if($image) {

            $old_img = $request->old_img;
            $gen_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize('636', '852')->save('frontend/assets/img/'.$gen_name);
            $save_url = 'frontend/assets/img/'.$gen_name;
            unlink($old_img);
            HomeSlide::findOrFail($id)->update([

                'title'         => $request->title,
                'short_title'   => $request->short_title,
                'video_url'     => $request->video_url,
                'img'           => $save_url,
                'updated_at'    => Carbon::now()

            ]);

        } 


        $notifactions = array(

            'message' => 'Home Slide Updated',
            'alert-type' => 'success'
        );


        return redirect()->back()->with($notifactions);


    }

}
