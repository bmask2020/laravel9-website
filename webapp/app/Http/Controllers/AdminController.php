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
   
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

}
