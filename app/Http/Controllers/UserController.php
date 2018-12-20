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
use Laravel\Socialite\Facades\Socialite;

class UserController extends Controller
{
    //
    public function login(Request $req){        
        $data = [
            'email' => $req->input('username'),
            'password' => $req->input('pass')
        ];        
        if(!Auth::attempt($data)){       
            return redirect()->back()->with('alert', "Wrong email/password");
        }           
        return redirect('/index');        
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name' => array('required','min:5'),
            'email' => array('required','unique:Users'),
            'password' => array('required','confirmed','min:8'),
            'gender' => array('in:male,female')
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
        return redirect()->back() ->with('alert', $input);
    }
    public function profile(){
        $user = User::where('id',Auth::user()->id)->first();
        return view('profile',compact('user'));
    }
    public function signout(){                      
        Auth::logout();        
        return redirect('/');
    }
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }
    /**
     * Obtain the user information from provider.  Check if the user already exists in our
     * database by looking up their provider_id in the database.
     * If the user exists, log them in. Otherwise, create a new user then log them in. After that
     * redirect them to the authenticated users homepage.
     *
     * @return Response
     */
    public function handleProviderCallback($provider)
    {
        $user = Socialite::driver($provider)->stateless()->user();
        $authUser = $this->findOrCreateUser($user, $provider);
        Auth::login($authUser, true);
        return redirect('/index');
    }
    /**
     * If a user has registered before using social auth, return the user
     * else, create a new user object.
     * @param  $user Socialite user object
     * @param $provider Social auth provider
     * @return  User
     */
    public function findOrCreateUser($user, $provider)
    {
        $authUser = User::where('provider_id', $user->id)->first();
        if ($authUser) {
            return $authUser;
        }
        else{
            $data = User::create([
                'name'     => $user->name,
                'email'    => !empty($user->email)? $user->email : '' ,
                'provider' => $provider,
                'provider_id' => $user->id,
            ]);
            return $data;
        }
    }
}
