<?php

namespace App\Http\Controllers;

use App\Dongle;
use App\User;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function adminIndex()
    {
        return view('admin_pages.admin_index');
    }

    public function userInfo()
    {
        $users = User::All();
        return view('admin_pages.admin_userInfo')->with(['users' => $users]);
    }

    public function dongleInfo()
    {
        $dongles = Dongle::All();
        return view('admin_pages.admin_dongleInfo')->with(['dongles' => $dongles]);
    }

    public function userRoles()
    {
        return view('admin_pages.admin_userRoles');
    }

    public function deleteUser($id)
    {
        if (Auth::user()->id == $id) {
            $user = User::find($id);
            return redirect()->back()->with('error', 'Deleting yourself is not allowed!');
        } else {
            $user->dongles()->detach();
            $user->roles()->detach();
            $user->delete();

            return redirect('/admin/userInfo');
        }
    }

    public function deleteDongle($id)
    {
        $dongle = Dongle::find($id);
        $dongle->users()->detach();
        $dongle->delete();

        return redirect('/admin/dongleInfo');
    }

}
