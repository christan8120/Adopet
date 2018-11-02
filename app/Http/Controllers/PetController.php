<?php

namespace App\Http\Controllers;

use App\Model\Pet;
use Illuminate\Http\Request;

class PetController extends Controller
{
    //
    public function index(){
        $pets = Pet::all();
        return view('master.home', ['pets'=>$pets]);
    }
}
