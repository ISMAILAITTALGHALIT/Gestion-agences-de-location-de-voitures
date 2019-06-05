<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    public function brand(){
        return $this->belongsTo(brand::class);
    }
}
