<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PetsLove extends Model
{
    //
    protected $table = 'petsloves';

    public function fkUserOwner()
    {
        return $this->belongsTo(User::class, 'userOwner_id');
    }

    public function fkUserLove()
    {
        return $this->belongsTo(User::class, 'userLove_id');
    }

    public function fkPetOwner()
    {
        return $this->belongsTo(Pet::class, 'petOwner_id');
    }

    public function fkPetLove()
    {
        return $this->belongsTo(Pet::class, 'petLove_id');
    }
}
