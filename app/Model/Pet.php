<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    //
    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function tradoption(){
        return $this->hasMany(TrAdoption::class);
    }
    public function user(){
        return $this->belongsTo(Category::class, 'userOwner');
    }
}
