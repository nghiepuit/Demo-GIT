<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cate;
use App\Subcate;
use App\Post;
class PageController extends Controller
{
    //
    function __construct(){
    	$cate = Cate::all();
    	view()->share('cate',$cate);
    }

    function trangchu(){
    	return view('pages.trangchu');
    }
    function contact(){
    	return view('pages.contact');
    }
    function chuyenmuc(){
    	return view('pages.chuyenmuc');
    }
}
