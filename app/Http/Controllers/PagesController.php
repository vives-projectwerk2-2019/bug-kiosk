<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

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

}
