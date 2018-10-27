<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DetailAdoption extends Model
{
    //
    protected $table = 'detailadoptions';

    public function fkTrId(){
        return $this->belongsTo(TrAdoption::class, 'tr_id');
    }

    public function fkPetId(){
        return $this->belongsTo(Pet::class, 'pet_id');
    }
}
