<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\SatrioEmail;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index(){
 
		Mail::to("satrio@abc.com")->send(new SatrioEmail());
 
		return "Email telah dikirim";
 
	}
}
