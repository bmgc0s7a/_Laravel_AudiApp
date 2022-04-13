<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function player(){
        return $this->hasOne(Address::Class);
    }
    public function country(){
        return $this->belongsTo(Country::Class);
    }
}

