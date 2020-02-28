<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    public function index($name){
		if($name == "dilarang"){
			return abort(403,'Anda tidak punya akses ke sistem ini');
		}elseif($name == "satrio"){
			return "Halo, ".$name;
		}else{
			return abort(404);
		}
	}
}
