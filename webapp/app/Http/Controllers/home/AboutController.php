<?php

namespace App\Http\Controllers\home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use Carbon\Carbon;

class AboutController extends Controller
{
    
    public function home_about() {

        $about = About::find(1);

        return view('admin.about.index', compact('about'));

    }


    public function admin_update_about_page(Request $request) {

        $validated = $request->validate([

            'title'                 => 'required',
            'short_title'           => 'required',
            'short_description'     => 'required',
            'long_description'      => 'required',

        ]);

        $id = $request->id;
        $image = $request->file('about_img');
        if($image) {

            $old_img = $request->old_img;
            $gen_name = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize('523', '605')->save('frontend/assets/img/'.$gen_name);
            $save_url = 'frontend/assets/img/'.$gen_name;
            unlink($old_img);
            About::findOrFail($id)->update([

                'title'                 => $request->title,
                'short_title'           => $request->short_title,
                'short_description'     => $request->short_description,
                'long_description'      => $request->long_description,
                'img'                   => $save_url,
                'updated_at'            => Carbon::now()

            ]);

        } else {

            About::findOrFail($id)->update([

                'title'                 => $request->title,
                'short_title'           => $request->short_title,
                'short_description'     => $request->short_description,
                'long_description'      => $request->long_description,
                'updated_at'    => Carbon::now()

            ]);

        }


        $notifactions = array(

            'message' => 'About Page Successfully Updated',
            'alert-type' => 'success'
        );


        return redirect()->back()->with($notifactions);

    }
}
