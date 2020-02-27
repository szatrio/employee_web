<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
 
class HashController extends Controller
{
	public function index(){
		$hash_my_password = Hash::make('coba1234');
		echo $hash_my_password;
	}
 
}