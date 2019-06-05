<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function client(){
        return $this->belongsTo(client::class);
    }

    public function agence(){
        return $this->belongsTo(Agence::class);

    }

}
