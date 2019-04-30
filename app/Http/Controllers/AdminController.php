<?php

namespace App\Http\Controllers;

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
}
