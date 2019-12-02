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
Route::group(['namespace' => 'Clients'], function(){
	// Homepage
	Route::get('/', 'HomeController@getIndex')->name('trang-chu');
	Route::get('loaisanpham/{type}', 'HomeController@getloaisp')->name('loai_san_pham');
	Route::get('ctsanpham/{id}', 'HomeController@ctsp')->name('ctsp');
	Route::post('search', 'HomeController@search')->name('search');
	Route::get('lienhe', 'HomeController@lienhe')->name('lien_he');
	Route::get('gioithieu', 'HomeController@gioithieu')->name('gioithieu');
});

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
	Route::group(['prefix' => 'admin', 'middleware' => 'user'], function(){
		// Cart
		Route::get('add-to-cart/{id}','Clients\CartController@getAddtoCart')->name('themgiohang');
		Route::get('del-cart/{id}','Clients\CartController@delcart')->name('xoagiohang');
		Route::get('dathang','Clients\CartController@dathang')->name('dathang');
		Route::post('dathang2','Clients\CartController@postcheckout')->name('dathang2');
		// Profile
		Route::get('cntk','Clients\ProfileController@cntk')->name('cntk');
		Route::post('save_cntk/{id}','Clients\ProfileController@save_cntk')->name('save_cntk');
		Route::get('doi_mk','Clients\ProfileController@doi_mk')->name('doi_mk');
		Route::post('save_doi_mk','Clients\ProfileController@save_doi_mk')->name('save_doi_mk');
	});
});



