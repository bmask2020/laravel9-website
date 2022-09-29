<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{


    public function profile() {

        $id = Auth::user()->id;

        $profile_data = User::find($id);

        return view('admin.profile.index', compact('profile_data'));

    }


    public function edit_profile() {

        $id = Auth::user()->id;

        $edit_data = User::find($id);

        return view('admin.profile.edit', compact('edit_data'));

    }


    public function store_profile(Request $request) {

        $id = Auth::user()->id;

        $data = User::find($id);

        $data->name = $request->name;

        $data->email = $request->email;

        $data->username = $request->username;

        if($request->file('image')) {

            $profile_img = $request->file('image');

            $old_img = $request->old_img;

            $gen = hexdec(uniqid());

            $exe = strtolower($profile_img->getClientOriginalExtension());

            $img_name = $gen.'.'.$exe;

            $location = 'backend/assets/images/profile/';

            $source = $location.$img_name;

            $profile_img->move($location,$img_name);

            $data->profile_image = $source;

            if($old_img != '') {

                unlink($old_img);

            }
           

        }

        $data->save();

        return redirect()->route('admin.profile');

    }
   
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
