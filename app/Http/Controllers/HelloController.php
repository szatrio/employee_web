<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function hello($name)
    {
    	return "Halo, " . $name;
    }
 
    public function call()
    {
    	return action('HelloController@hello', ['name' => 'Satrio']);
    }
}
