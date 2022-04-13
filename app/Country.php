<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function addresses(){
        return $this->hasOne(Address::Class);
    }
}
