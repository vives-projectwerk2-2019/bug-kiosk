<?php

namespace App\Http\Controllers;

use App\Dongle;
use App\Role;
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
        $dongles = Dongle::All();
        return view('pages.dongles')->with(['dongles' => $dongles]);
    }

    public function my_dongles()
    {
        $user = Auth::user();
        return view('pages.my_dongles')->with(['user' => $user]);
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

    public function becomeAdmin()
    {
        return view('pages.become_admin');
    }

    public function checkKey(Request $request)
    {
        $keyToCheck = $request->input('admin_key');

        if (env('ADMIN_KEY') !== null && $keyToCheck == env('ADMIN_KEY')) {
            $role_id = Role::where('name', 'admin')->first()->id;
            $user = Auth::user();
            $user->roles()->sync($role_id, false);

            return redirect('/admin/index');
        }
        return redirect()->back()->with('error', 'Incorrect admin key!');
    }
}
