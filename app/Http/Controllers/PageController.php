<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Cate;
use App\Subcate;
use App\Nsx;
use App\Post;
use App\Product;
use App\News;
use App\Events;
class PageController extends Controller
{
    //
    function __construct(){

    	$cate = Cate::all();
    	$subcate = Subcate::all();
        $nsx = Nsx::all();
        $product = Product::all();

    	view()->share('cate',$cate);
    	view()->share('subcate',$subcate);
        view()->share('nsx',$nsx);
        view()->share('product',$product);

    	$nb = Post::where('post_high','1')->paginate(4);
    	view()->share('nb',$nb);
    	$news = News::all();
    	view()->share('news',$news);
    	$events = Events::all();
    	view()->share('events',$events);
        $cate1 = Cate::where('customer_id','1')->first();
    }

    function trangchu(){
    	$post = Post::where('subcate_id','7')->paginate(6);
    	return view('pages.trangchu',['post'=>$post]);
    }
    function contact(){
    	return view('pages.contact');
    }
    function canhan(){
    	return view('pages.canhan');
    }
    function doanhnghiep(){     
        return view('doanhnghiep.doanhnghiep');
    }
    function news(){
    	return view('pages.news');
    }
    function newsNoidung($id){
    	$news = News::find($id);
    	$n = News::all();
    	return view('pages.newsNoidung',['news'=>$news,'n'=>$n]);
    }

    function product(){
        return view('pages.product');
    }
    function item($id){
        $product = Product::find($id);
        $n = Product::all();
        return view('pages.item',['product'=>$product,'n'=>$n]);
    }

    function events(){
    	return view('pages.events');
    }
    function eventsNoidung($id){
    	$ea = Events::all();
    	$events = Events::find($id);
    	return view('pages.eventsNoidung',['events'=>$events,'ea'=>$ea]);
    }

    function chuyenmuc($cate_namekd){
    	$cate = Cate::where('cate_namekd',$cate_namekd)->first();//1 item
    	$subcate = Subcate::where('cate_id',$cate->id)->paginate(5);//array
    	return view('pages.chuyenmuc',['cate2'=>$cate,'subcate3'=>$subcate]);
    }
    function loaitin($cate_namekd,$subcate_namekd){
    	$cate = Cate::where('cate_namekd',$cate_namekd)->first();//1 item
    	$subcate = Subcate::where('subcate_namekd',$subcate_namekd)->first();//1 item
    	$product = Product::where('subcate_id',$subcate->id)->paginate(5);//array
    	return view('pages.loaitin',['cate1'=>$cate,'subcate2'=>$subcate,'product2'=>$product]);
    }
    function nhasx($cate_namekd,$subcate_namekd,$nsx_namekd){
        dd($cate_namekd,$subcate_namekd,$nsx_namekd);
    }
    function sanpham(){
        echo "product_namekd";
    }

    function tintuc($cate_namekd,$subcate_namekd,$post_titlekd){
    	$cate = Cate::where('cate_namekd',$cate_namekd)->first();
    	$subcate = Subcate::where('subcate_namekd',$subcate_namekd)->first();
    	$post = Post::where('post_titlekd',$post_titlekd)->first();
    	$p = Post::where('subcate_id',$subcate->id)->paginate(2);
    	return view('pages.tintuc',['cate1'=>$cate,'subcate'=>$subcate,'post'=>$post,'p'=>$p]);
    }

    function dnchuyenmuc($cate_namekd){
        $cate = Cate::where('cate_namekd',$cate_namekd)->first();
        $subcate = Subcate::where('cate_id',$cate->id)->paginate(5);
        return view('doanhnghiep.chuyenmuc',['cate1'=>$cate,'subcate'=>$subcate]);
    }
    function dnloaitin($cate_namekd,$subcate_namekd){
        $cate = Cate::where('cate_namekd',$cate_namekd)->first();
        $subcate = Subcate::where('subcate_namekd',$subcate_namekd)->first();
        $post = Post::where('subcate_id',$subcate->id)->paginate(5);
        return view('doanhnghiep.loaitin',['cate1'=>$cate,'subcate'=>$subcate,'post'=>$post]);
    }
    function dntintuc($cate_namekd,$subcate_namekd,$post_titlekd){
        $cate = Cate::where('cate_namekd',$cate_namekd)->first();
        $subcate = Subcate::where('subcate_namekd',$subcate_namekd)->first();
        $post = Post::where('post_titlekd',$post_titlekd)->first();
        $p = Post::where('subcate_id',$subcate->id)->paginate(2);
        return view('doanhnghiep.tintuc',['cate1'=>$cate,'subcate'=>$subcate,'post'=>$post,'p'=>$p]);
    }
}