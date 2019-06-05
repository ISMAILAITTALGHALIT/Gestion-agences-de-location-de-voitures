<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function agences(){
        return $this->hasMany(Agence::class);
    }
}
