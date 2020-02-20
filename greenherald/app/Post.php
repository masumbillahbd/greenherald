<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    

    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function category_id(){
    	return $this->belongsToMany('App\Category');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }


}
