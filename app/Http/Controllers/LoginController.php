<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(Request $req){
        $username = $req->username;
        $password = $req->password;         
        return view("master/home/index");
    }

    public function signout(){                 
        return view("/login/index");
    }
}
