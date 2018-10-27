<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Model\Pet;
class LoginController extends Controller
{
    //
    public function login(Request $req){
        $email = $req->input('username');
        $pass = $req->input('pass');        
        $data = DB::select('select password from users where email=?', [$email]);        
        //dd($data[0]);
        if(count($data) != 0){
            $bool = Hash::check($pass, $data[0]->password);        
            if($bool){
                $pets = Pet::all();                
                return view("master/home", ['pets'=>$pets]);                
                //return back()->with('error', $data);
            }
            else{
                return back()->with('error', "Login Failed");
            }
        }
        //dd($bool);
        //{&& $bool == "true"         
        else{
            return back()->with('error', "Login Failed");
        }
    }

    public function signout(){                 
        return view("/login/index");
    }
}
