<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Agence extends Model
{
    public function entreprise(){
        return $this->belongsTo(Entreprise::class);
    }

    public function cars(){
        return $this->hasMany(car::class);
    }
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
