<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Model\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //    
    public function showHome(){
        return view('master/home/index');
    }

    public function login(Request $req){
        if(Auth::viaRemember()){
            return redirect('/home');
        }        
        else if($users = User::where('email', $req['username'])->get())
        {            
            $users1 = User::where('email', $req['username'])->first();
            Auth::attempt(['email'=>$req->username,'password'=>$req->password], $req['remember']);                                    
            return view('/master/home/index', [ 'users'=>$users1]);
        }
        return redirect('/home');
        // $username = $req->username;
        // $password = $req->password;         
        // return view("master/home/index");
    }

    public function signout(){                 
        return view("/login/index");
    }
}
