<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function reservations(){
        return $this->hasMany(Reservation::class);
    }
}
