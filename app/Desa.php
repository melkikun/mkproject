<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desa extends Model
{
	protected $table = "wilayah_desa";
	public $primaryKey = "id";
	public $incrementing = false;



    public function kecamatan(){
    	return $this->belongsTo('App\Kecamatan', 'kecamatan_id');
    }
}
