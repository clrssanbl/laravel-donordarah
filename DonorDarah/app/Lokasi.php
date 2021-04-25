<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lokasi extends Model
{
    protected $fillable = ['nama','alamat'];
    
    public function donors(){
        return $this->hasMany('App\Donor');
    }
}
