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
Route::group(['namespace' => 'Clients', 'middleware' => 'user'], function(){
	// Homepage
	Route::get('/', 'HomeController@getIndex')->name('trang-chu');
	Route::get('loaisanpham/{type}', 'HomeController@getloaisp')->name('loai_san_pham');
	Route::get('ctsanpham/{id}', 'HomeController@ctsp')->name('ctsp');
	Route::post('search', 'HomeController@search')->name('search');
	Route::get('lienhe', 'HomeController@lienhe')->name('lien_he');
	Route::get('gioithieu', 'HomeController@gioithieu')->name('gioithieu');

	// Profile
	Route::get('cntk','ProfileController@cntk')->name('cntk');
	Route::post('save_cntk/{id}','ProfileController@save_cntk')->name('save_cntk');
	Route::get('doi_mk','ProfileController@doi_mk')->name('doi_mk');
	Route::post('save_doi_mk','ProfileController@save_doi_mk')->name('save_doi_mk');
});


// Cart
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


Route::group(['middleware' => ['auth']], function () {	
	Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function(){
		Route::get('getadmin','admin@getadmin')->name('getadmin');
		Route::resource('user', 'UserController');
		Route::resource('category', 'CategoryController');
		Route::resource('product', 'ProductController');
		Route::get('order','admin@order')->name('order');
		Route::get('customer/{id}','admin@customer')->name('customer');
		Route::get('bill/{id}','admin@bill')->name('bill');
		Route::get('xoaorder/{id}','admin@xoaorder')->name('xoaorder');
		Route::get('status/{id}','admin@status')->name('status');
	});
});



