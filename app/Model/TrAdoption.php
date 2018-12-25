<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TrAdoption extends Model
{
    //
    protected $table = 'tradoptions';   
    
    public function fkUserOwner(){
        return $this->belongsTo(User::class, 'userOwner');
    }
    public function fkUserAdopter(){
        return $this->belongsTo(User::class, 'userAdopter');
    }
    public function fkPet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }
}
