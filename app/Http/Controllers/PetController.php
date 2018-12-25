<?php

namespace App\Http\Controllers;

use App\Model\Pet;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Model\TrAdoption;
use App\Model\Category;
use App\Model\PetsLove;
use App\User;
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
        $pet->userOwner = Auth::user()->id;
        $pet->save();

        $tradoption = new TrAdoption;
        $tradoption->userOwner = $pet->userOwner;
        $tradoption->userAdopter = Auth::user()->id;
        $tradoption->pet_id = $id;
        $tradoption->transaction_date = Carbon::now();
        $tradoption->audit_activity = "I";        
        $tradoption->save();      
        
        return redirect('/index');
    }
    
    public function findLove()
    {
        $usersPet = Pet::where('userOwner', Auth::user()->id)->get();                
        $category = Category::all();        
        $availablePet = Pet::where('post_status','=', '2')->where(function($q){
            $q->where('userOwner','!=', Auth::user()->id);
        })->get(); 
        //dd($availablePet);               
        if(!empty($usersPet)){
            return view('findlove', ["usersPets"=>$usersPet, "availablePets"=>$availablePet, 'categories'=>$category]);
        }
    }

    public function savePet(Request $req){
        $image = $req->picture_src;
        //dd($image->getClientOriginalname());
        $image->move('image/pet', $image->getClientOriginalname());
        $pet = new Pet;
        $pet->category_id =  $req->category_id;
        $pet->pet_name = $req->pet_name;
        $pet->userOwner = Auth::user()->id;
        $pet->age = $req->age;
        $pet->gender = $req->gender;
        $pet->status = 0;
        $pet->post_status = 2;
        $pet->picture_src = $image->getClientOriginalname();
        $pet->description = $req->description;
        $pet->audit_activity = "I";
        //dd($pet);
        $pet->save();
        return redirect('/findlove');
    }

    public function saveFindLove()
    {               
        $petOwner = Pet::where('id', request('id'))->first();
        $userOwner = User::where('id', $petOwner->userOwner);
        $petLove = Pet::where('userOwner', Auth::user()->id)->first();   
             
        $data = [
            'petOwner_id'=>$petOwner->id,
            'userOwner_id'=>$petOwner->userOwner,
            'petLove_id' => $petLove->id,
            'userLove_id' => Auth::user()->id,
            'status' => 0
        ];
        // dd($data);
        $isExist = PetsLove::where([
            ['petOwner_id', '=', $petOwner->id],
            ['userOwner_id', '=', $petOwner->userOwner],
            ['petLove_id', '=', $petLove->id],
            ['userLove_id', '=', Auth::user()->id]
        ])->first();       

        if(empty($isExist)){
            PetsLove::insert([
                $data
            ]);
        }
    }

    public function acceptMate($id)
    {
        $petsLove = PetsLove::where('id', $id)->first();
        $petsLove->status = 1; //accepted
        $petsLove->save();
        
        $petOwner = Pet::where('id', $petsLove->userOwner_id)->first();
        $petOwner->post_status = 0;
        $petOwner->save();

        $petFindLove = Pet::where('id', $petsLove->userLove_id)->first();
        $petFindLove->post_status = 0;
        $petFindLove->save();

        $petToDelete = PetsLove::where('userOwner_id', Auth::user()->id)->get();
        foreach($petToDelete as $p){
            $p->delete();
        }

        return redirect('/profile');
    }
}
