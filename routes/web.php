<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');





// Admin access
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
});

// Doctor access
Route::group(['as'=>'doctor.','prefix'=>'doctor','namespace'=>'Doctor','middleware'=>['auth','doctor']], function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
});

// Hospital access
Route::group(['as'=>'hospital.','prefix'=>'hospital','namespace'=>'Hospital','middleware'=>['auth','hospital']], function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
});

// User access
Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'User','middleware'=>['auth','user']], function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
});