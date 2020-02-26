<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
    protected $table = "prize";
 
    public function member()
    {
    	return $this->belongsToMany('App\Member');
    }
}
