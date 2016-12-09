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

use App\Cate;
Route::get('/', function () {
    return view('welcome');
});
/*Route::get('thu',function(){
	return view('admin.slide.list');
});*/
Route::group(['prefix'=>'admin'],function(){
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

		Route::get('edit','PostController@getEdit');
		
		Route::get('add','PostController@getAdd');
	});

	Route::group(['prefix'=>'user'],function(){
		//admin/cate/list
		Route::get('list','UserController@getList');

		Route::get('edit','UserController@getEdit');
		
		Route::get('add','UserController@getAdd');
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