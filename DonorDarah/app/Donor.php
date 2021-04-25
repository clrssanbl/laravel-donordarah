<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    protected $fillable = ['userid','goldarid','umur','beratbadan','penyakit','lokasi','tanggal'];

    public function accepted(){
        if($this->status==1){
            return true;
        }        
        return false;
    }

    public function getStatus(){
        if($this->status==0){
            return 'Menunggu Konfirmasi';
        }
        else if($this->status==1){
            return 'Silahkan Menuju Lokasi Donor';
        }
        else if($this->status==2){
            return 'Donor Selesai, Terima Kasih';
        }
    }

    public function done(){
        if($this->status==2){
            return true;
        }
        return false;
    }

    public function users(){
        return $this->belongsTo('App\User', 'userid');
    }

    public function goldars(){
        return $this->belongsTo('App\Goldar', 'goldarid');
    }

    public function lokasis(){
        return $this->belongsTo('App\Lokasi', 'lokasi');
    }
}
