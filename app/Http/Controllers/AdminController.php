<?php

namespace App\Http\Controllers;

use App\User;

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
        return view('admin_pages.admin_dongleInfo');
    }

    public function userRoles()
    {
        return view('admin_pages.admin_userRoles');
    }
}
