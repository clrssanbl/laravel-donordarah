<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public function goldars(){
        return $this->belongsTo('App\Goldar', 'goldarid');
    }

    public function updateStock(){
        $this->stockdarah++;
    }
}
