<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcate extends Model
{
	protected $table ='subcate';
    //
    public function cate(){
    	return $this->belongsTo('App\Cate','cate_id','id');
    }
    public function post(){
    	return $this->hasMany('App\Post','subcate_id','id');
    }
}
