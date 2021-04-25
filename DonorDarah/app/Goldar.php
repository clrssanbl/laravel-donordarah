<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goldar extends Model
{
    public function donors(){
        return $this->hasMany('App\Donor');
    }

    public function stocks(){
        return $this->hasOne('App\Stock');
    }

    public function request_darahs(){
        return $this->hasMany('App\RequestDarah');
    }
}
