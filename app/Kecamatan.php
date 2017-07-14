<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $table = 'wilayah_kecamatan';
    public $primaryKey = 'id';
    public $incrementing = false;


    public function desa(){
    	return $this->hasMany('App\Desa', 'kecamatan_id');
    }

    public function kabupaten(){
    	return $this->belongsTo('App\Kabupaten', 'kabupaten_id');
    }

}
