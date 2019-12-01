<?php
use  App\Http\Middleware;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();
Route::get('/',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'	
]);
Route::get('loaisanpham/{type}',[
	'as'=>'loai_san_pham',
	'uses'=>'PageController@getloaisp']);
Route::get('ctsanpham/{id}',[
	'as'=>'ctsp',
	'uses'=>'PageController@ctsp']);
Route::get('lienhe',[
	'as'=>'lien_he',
	'uses'=>'PageController@lienhe']);
Route::get('gioithieu',[
	'as'=>'gioithieu',
	'uses'=>'PageController@gioithieu']);
Route::get('add-to-cart/{id}',[
	'as'=>'themgiohang',
	'uses'=>'PageController@getAddtoCart'
	]);
Route::get('del-cart/{id}',[
	"as"=>'xoagiohang',
	'uses'=>'PageController@delcart',
	]);
Route::get('dathang',[
	"as"=>'dathang',
	'uses'=>'PageController@dathang',
	]);
Route::post('dathang2',[
	'as'=>'dathang2',
	'uses'=>'PageController@postcheckout',
]);

Route::get('login','PageController@login')->name('login')->middleware('check');
Route::get('register','PageController@register')->name('register');
Route::post('registernew','PageController@registernew')->name('registernew');
Route::post('getlogin','PageController@getlogin')->name('getlogin');
Route::get('logout','PageController@logout')->name('logout');
Route::post('/search', 'PageController@search')->name('search');
Route::group(['middleware' => ['auth']], function () {	
	Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
		Route::get('getadmin','admin@getadmin')->name('getadmin');
		Route::get('user','admin@viewuser')->name('viewuser');
		Route::get('suauser/{id}','admin@suauser')->name('suauser');
		Route::get('xoauser/{id}','admin@xoauser')->name('xoauser');
		Route::get('newuser','admin@newuser')->name('newuser');
		Route::post('addnewuser','admin@addnewuser')->name('addnewuser');
		Route::post('upuser/{id}','admin@upuser')->name('upuser');

		// Route::get('category','CategoryController@index')->name('category.index');
		// Route::get('themcategory','admin@themcategory')->name('themcategory');
		// Route::post('addnewcategory','admin@addnewcategory')->name('addnewcategory');
		// Route::get('suacategory/{id}','admin@suacategory')->name('suacategory');
		// Route::get('xoacategory/{id}','admin@xoacategory')->name('xoacategory');
		// Route::put('updatecategory/{id}','admin@updatecategory')->name('updatecategory');

		Route::resource('category', 'CategoryController');

		Route::get('viewproduct','admin@viewproduct')->name('viewproduct');
		Route::get('themproduct','admin@themproduct')->name('themproduct');
		Route::post('addproduct','admin@addproduct')->name('addproduct');
		Route::get('suaproduct/{id}','admin@suaproduct')->name('suaproduct');
		Route::get('xoaproduct/{id}','admin@xoaproduct')->name('xoaproduct');
		Route::post('upproduct/{id}','admin@upproduct')->name('upproduct');
		Route::get('order','admin@order')->name('order');
		Route::get('customer/{id}','admin@customer')->name('customer');
		Route::get('bill/{id}','admin@bill')->name('bill');
		Route::get('xoaorder/{id}','admin@xoaorder')->name('xoaorder');
		Route::get('status/{id}','admin@status')->name('status');
	});

	Route::group(['prefix' => 'user', 'middleware' => 'user'], function(){
				Route::get('/',[
			'as'=>'trang-chu-user',
			'uses'=>'PageController@getIndex'	
		]);
	});
});



