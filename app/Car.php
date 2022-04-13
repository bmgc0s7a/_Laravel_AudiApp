<?php

namespace App;

use App\Player;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    public function player(){
        return $this->belongsTo(Player::Class);
    }
}
