<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RequestDarah extends Model
{
    public function accepted(){
        if ($this->status==1){
            return true;
        }

        return false;
    }

    public function getStatus(){
        if($this->status==0){
            return 'Waiting Confirmation';
        }

        return 'Request Accepted';
    }

    public function users(){
        return $this->belongsTo('App\User', 'userid');
    }

    public function goldars(){
        return $this->belongsTo('App\Goldar', 'goldarid');
    }
}
