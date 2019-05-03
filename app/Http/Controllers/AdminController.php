<?php

namespace App\Http\Controllers;

use App\Dongle;
use App\Role;
use App\User;
use Illuminate\Http\Request;
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

    public function editUser($id)
    {
        $user = User::Find($id);
        return view('admin_pages.admin_editUser')->with(['user' => $user]);
    }

    public function editDongle($id)
    {
        $dongle = Dongle::Find($id);
        return view('admin_pages.admin_editDongle')->with(['dongle' => $dongle]);
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

    public function resetAvatar($id)
    {
        $user = User::Find($id);
        $user->avatar = "images/avatars/default.png";
        $user->save();

        return redirect('/admin/userInfo/edit/' . $id);
    }

    public function editUserProfile(Request $request, $id)
    {
        $user = User::Find($id);
        $new_name = $request->input('name');
        $new_email = $request->input('email');

        $user->name = $new_name;
        $user->email = $new_email;

        $user->save();

        return redirect('/admin/userInfo');
    }

    public function resetUserDongleId($id)
    {
        $user = User::Find($id);

        $new_user_dongle_id = "00" . strval(bin2hex(openssl_random_pseudo_bytes(7)));
        $user->user_dongle_id = $new_user_dongle_id;

        $user->save();

        return redirect('/admin/userInfo/edit/' . $id);
    }

    public function newDongle()
    {
        return view('admin_pages.admin_newDongle');
    }
}
