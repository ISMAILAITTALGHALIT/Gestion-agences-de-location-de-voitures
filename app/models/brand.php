<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    public function car(){
        return $this->belongsTo(car::class);
    }

    public function carModels(){
        return $this->hasMany(CarModel::class);
    }
}
