<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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


        $notifactions = array(

            'message' => 'Admin Profile Update',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.profile')->with($notifactions);

    }



    public function change_password() {

        return view('admin.profile.change_password');
    }


    public function update_password(Request $request) {

        $validate = $request->validate([

            'oldPassword'       => 'required',
            'newPassword'       => 'required',
            'confirmPassword'   => 'required|same:newPassword'

        ]);


        $hashedPassword = Auth::user()->password;

        if(Hash::check($request->oldPassword, $hashedPassword)) {

            $users = User::find(Auth::id());

            $users->password = bcrypt($request->newPassword);

            $users->save();

            session()->flash('message', 'Successfully Update Password');

            return redirect()->back();

        } else {

            session()->flash('message', 'Old Password Is Not Match');

            return redirect()->back();

        }

    }
   
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notifactions = array(

            'message' => 'You Are Logout',
            'alert-type' => 'error'
        );

        return redirect('/login')->with($notifactions);
    }

}
