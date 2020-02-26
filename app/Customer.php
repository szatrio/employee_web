<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "customer";
 
    public function phone()
    {
    	return $this->hasOne('App\Phone');
    }
}
