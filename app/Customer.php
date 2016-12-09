<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
	protected $table ='customer';
    //
    public function cate(){
    	return $this->hasMany('App\Cate','customer_id','id');
    }
}
