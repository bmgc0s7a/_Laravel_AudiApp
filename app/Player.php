<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Car;
use App\Address;

class Player extends Model
{
    public function cars(){
        return $this->hasMany(Car::Class);
    }

    public function address(){
        return $this->belongsTo(Address::Class);
    }
}
