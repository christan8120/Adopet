<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Model\Pet;
use App\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class UserController extends Controller
{
    //
    public function login(Request $req){        
        $data = [
            'email' => $req->input('username'),
            'password' => $req->input('pass')
        ];        
        if(!Auth::attempt($data)){            
            //dd(!Auth::attempt($data));
            return redirect()->back()->with('error', "Login Failed");
        }
        if(Auth::attempt($data)){            
            // return redirect()->back()->with('error', "Login Failed");
            return redirect('/index');
        }
        //dd($data);
        return redirect()->back()->with('error', "Login Failed");
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'email' => 'unique:Users'
        ]);        
        $user = new User;
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->email = $request->input('email');
        $user->address = $request->input('address');
        if($request->gender == 'male') $user->gender = "Male";
        elseif ($request->gender == 'female') $user->gender = "Female";
        $user->created_at = Carbon::now();
        $user->save();

        $input = $request->input('email');
//        return view('login', compact('input'));
//        return view('login', compact('input')) ->with('alert', 'Updated!');
        return redirect()->back() ->with('alert', $input);
    }
    
    public function signout(){              
        //Note: lom ada signout button ? 
        return view("/");
    }
}
