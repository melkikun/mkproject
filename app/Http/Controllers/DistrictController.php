<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Desa;
use App\Kecamatan;
use App\Kabupaten;
use App\Provinsi;
use App\Mail\TestingMail;
use Mail;
class DistrictController extends Controller{
    function __construct(){
    }

    function index(){
    	// $desa = new Desa();
    	// echo $desa->with([
    	// 	'kecamatan'=>function($q){
    	// 		return $q->where('nama', ' Kras');
    	// 	}
    	// ])
    	

    	// $kecamatan = new Kecamatan();
    	// echo 
    	// $kecamatan
    	// ->with([
    	// 	'desa'=>function($q){
    	// 		return $q->where('nama', 'Setonorejo');
    	// 	}
    	// ])
    	// ->where('nama', ' Kras')->get();

    	// ;

    	$content = [
    		'title'=> 'Itsolutionstuff.com mail', 
    		'body'=> 'The body of your message.',
    		'button' => 'Click Here'
    		];
    		$receiverAddress = 'schiffer0789@yahoo.com';
    		Mail::to($receiverAddress)->send(new TestingMail($content));
    }
}
