<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kabupaten extends Model
{
    protected $table = 'wilayah_kabupaten';
    public $primaryKey = 'id';
    public $incrementing = false;


    public function kecamatan(){
    	return $this->hasMany('App\Kecamatan', 'kabupaten_id');
    }

    public function provinsi(){
    	return $this->belongsTo('App\Provinsi', 'provinsi_id');
    }
}
