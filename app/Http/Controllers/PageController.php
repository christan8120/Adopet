<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function informasi()
    {
        return view('informasi');
    }

    public function findlove()
    {
        return view('findlove');
    }
}
