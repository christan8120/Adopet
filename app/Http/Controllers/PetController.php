<?php

namespace App\Http\Controllers;

use App\Model\Pet;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\TrAdoption;
use Illuminate\Support\Facades\Auth;

class PetController extends Controller
{
    //
    public function index(){
        $pets = Pet::where('status', 0)->get();
        return view('home', ['pets'=>$pets]);
    }

    public function adoptIt($id){
        $pet = Pet::where('id', $id)->first();
        $pet->status = 1;
        $pet->save();

        $tradoption = new TrAdoption;
        $tradoption->userOwner = $pet->userOwner;
        $tradoption->userAdopter = Auth::user()->id;
        $tradoption->transaction_date = Carbon::now();
        $tradoption->audit_activity = "I";        
        $tradoption->save();      
        
        return redirect('/index');
    }
}
