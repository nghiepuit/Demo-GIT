<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/


/*Route::get('aa','MyController@Xinchao');
Route::get('tai',function(){
	echo "string";
});

Route::get('myview','MyController@Myview');

//truyen sang view

Route::get('truyen/{t}','MyController@truyenview');*/

Route::get('/', function () {
    return view('welcome');
});
/*Route::get('thu',function(){
	return view('admin.slide.list');
});*/

Route::get('admin/login','UserController@getLoginAdmin');
Route::post('admin/login','UserController@postLoginAdmin');
Route::get('admin/logout','UserController@getLogout');
Route::group(['prefix'=>'admin','middleware'=>'adminLogin'],function(){
	Route::group(['prefix'=>'cate'],function(){
		//admin/cate/list
		Route::get('list','CateController@getList');

		Route::get('edit/{id}','CateController@getEdit');

		Route::post('edit/{id}','CateController@postEdit');

		Route::get('add','CateController@getAdd');

		Route::post('add','CateController@postAdd');

		Route::get('del/{id}','CateController@getDel');
	});

	Route::group(['prefix'=>'subcate'],function(){
		//admin/cate/list
		Route::get('list','SubcateController@getList');

		Route::get('edit/{id}','SubcateController@getEdit');

		Route::post('edit/{id}','SubcateController@postEdit');

		Route::get('add','SubcateController@getAdd');

		Route::post('add','SubcateController@postAdd');

		Route::get('del/{id}','SubcateController@getDel');
	});

	Route::group(['prefix'=>'post'],function(){
		//admin/cate/list
		Route::get('list','PostController@getList');

		Route::get('edit/{id}','PostController@getEdit');

		Route::post('edit/{id}','PostController@postEdit');

		Route::get('add','PostController@getAdd');

		Route::post('add','PostController@postAdd');

		Route::get('del/{id}','PostController@getDel');
	});

	Route::group(['prefix'=>'ajax'],function(){
		Route::get('subcate/{cate_id}','AjaxController@getSubcate');
	});

	Route::group(['prefix'=>'user'],function(){
		//admin/cate/list
		Route::get('list','UserController@getList');

		Route::get('edit/{id}','UserController@getEdit');

		Route::post('edit/{id}','UserController@postEdit');

		Route::get('add','UserController@getAdd');

		Route::post('add','UserController@postAdd');

		Route::get('del/{id}','UserController@getDel');
	});

	Route::group(['prefix'=>'slide'] ,function(){
		//admin/cate/list
		Route::get('list','SlideController@getList');

		Route::get('edit','SlideController@getEdit');
		
		Route::get('add','SlideController@getAdd');
	});

	Route::group(['prefix'=>'customer'] ,function(){
		//admin/cate/list
		Route::get('list','CustomerController@getList');

		Route::get('edit','CustomerController@getEdit');
		
		Route::get('add','CustomerController@getAdd');
	});
});

Route::get('trangchu','PageController@trangchu');
Route::get('contact','PageController@contact');
Route::get('chuyenmuc','PageController@chuyenmuc');