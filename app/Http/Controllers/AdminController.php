<?php

namespace App\Http\Controllers;

use App\Dongle;
use App\Role;
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

    public function editUser()
    {
        return view('admin_pages.admin_editUser');
    }

    public function editDongle()
    {
        return view('admin_pages.admin_editDongle');
    }

    public function dongleInfo()
    {
        $dongles = Dongle::All();
        return view('admin_pages.admin_dongleInfo')->with(['dongles' => $dongles]);
    }

    public function getAdmins()
    {
        $users = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();
        return view('admin_pages.admin_admins')->with(['users' => $users]);
    }

    public function removeAdminRights($id)
    {
        $user = User::find($id);

        if (Auth::user()->id == $id) {
            return redirect()->back()->with('error', 'Removing your own admin rights is not allowed!');
        } else {
            $role_id = Role::where('name', 'user')->first()->id;
            $user = User::find($id);
            $user->roles()->sync($role_id);

            return redirect('/admin/admins');
        }
    }

    public function deleteUser($id)
    {
        $user = User::find($id);

        if (Auth::user()->id == $id) {
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
