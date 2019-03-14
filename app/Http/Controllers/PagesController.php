<?php

namespace App\Http\Controllers;

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

}
