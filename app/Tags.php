<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = "tags";
 
    public function article()
    {
    	return $this->belongsTo('App\Article');
    }
}
