<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cate;
use App\Subcate;
use App\Post;

class AjaxController extends Controller
{
    //
	public function getSubcate($cate_id){
		$subcate = Subcate::where('cate_id',$cate_id)->get();
		foreach ($subcate as $sc) {
			echo "<option value='".$sc->id."'>".$sc->subcate_name."</option>";
		}
	}

    
    //
}
