<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'Select2Controller@index');
Route::get('/cari', 'Select2Controller@loadData');

Route::get('admin1',function(){
	return view('layouts.admin1');
});

Auth::routes();


	Route::get('/home', 'HomeController@index')->name('home');

	Route::group(['prefix'=>'admin', 'middleware'=>['auth','role:admin']], function(){
	Route::resource('merk','MerkController');
	Route::resource('mobil','MobilController');
	Route::resource('customer','CustomerController');
	Route::resource('supir','SupirController');
	Route::resource('rental','RentalController');
	Route::resource('kembali','KembaliController');
});

Route::get('user1',function(){
	return view('layouts.user1');
});

Route::get('user',function(){
	return view('layouts.user');
});

Route::resource('kembali','KembaliController');
Route::resource('rental','RentalController');