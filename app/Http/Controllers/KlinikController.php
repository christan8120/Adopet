<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Clinic;
use App\Model\Pet;
class KlinikController extends Controller
{
    //
    public function index()
    {
        $klinik = Clinic::all();         
        //return view('home', compact('klinik'))        
        return view('informasi',["clinics"=>$klinik]);
        //return view('home', ['pets'=>$pets]);
    }
}
