<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class car extends Model
{
    public function agence(){
        return $this->belongsTo(Agence::class);
    }

    public function brand(){
        return $this->hasOne(brand::class);
    }
}
