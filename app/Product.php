<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function type(){
    	return $this->belongsTo('App\Type');
    }
    public function material(){
    	return $this->belongsTo('App\Material');
    }
    public function style(){
    	return $this->belongsTo('App\Style');
    }
}
