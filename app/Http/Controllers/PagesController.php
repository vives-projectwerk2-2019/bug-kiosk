<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PagesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function profile()
    {
        return view('pages.profile');
    }

    public function stats()
    {
        return view('pages.stats');
    }

    public function logger()
    {
        return view('pages.logger');
    }

    public function dongles()
    {
        return view('pages.dongles');
    }

    public function my_dongles()
    {
        return view('pages.my_dongles');
    }

    public function registerDevice()
    {
        return view('pages.register_device');
    }

    public function programDongle()
    {
        return view('pages.program_dongle');
    }

    public function editProfile()
    {
        return view('pages.edit_profile');
    }

    public function updateAvatar(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $filename = time() . "." . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(150, 150)->save(\public_path('/images/avatars/' . $filename));
            $user = Auth::user();
            $user->avatar = "images/avatars/" . $filename;
            $user->save();
        }
        return view('pages.edit_profile');
    }

    public function permissionDenied()
    {
        return view('pages.permission_denied');
    }
}
