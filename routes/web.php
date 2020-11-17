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

// Reset Password
Route::resource('/reset','ResetPasswordController');

// Frontend pages
Route::get('/health/piles', function () { return view('frontend.health.piles');});
Route::get('/health/hernia', function () { return view('frontend.health.hernia');});
Route::get('/health/fistula', function () { return view('frontend.health.fistula');});
Route::get('/health/fissure', function () { return view('frontend.health.fissure');});
Route::get('/health/gynecomastia', function () { return view('frontend.health.gynecomastia');});
Route::get('/health/gallstone', function () { return view('frontend.health.gallstone');});
Route::get('/health/sports-orthopedic', function () { return view('frontend.health.sports-orthopedic');});
Route::get('/health/phimosis', function () { return view('frontend.health.phimosis');});
Route::get('/health/kidney-stone', function () { return view('frontend.health.kidney-stone');});
Route::get('/health/hydrocele', function () { return view('frontend.health.hydrocele');});
Route::get('/beauty/gynecomastia', function () { return view('frontend.beauty.gynecomastia');});
Route::get('/our-doctors', function () { return view('frontend.doctors');});
Route::get('/thank-you', function () { return view('frontend.thank-you');});
Route::get('/health/varicose-veins', function () { return view('frontend.health.varicose-veins');});



// Admin access
Route::group(['as'=>'admin.','prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
	Route::resource('/user','UserController');
	Route::resource('/doctor','DoctorController');
	Route::resource('/hospital','HospitalController');
	Route::post('/ipd/{id}/active','ipdController@active')->name('ipd.active');
	Route::post('/ipd/{id}/complete','ipdController@complete')->name('ipd.complete');
	Route::post('/ipd/{id}/cancel','ipdController@cancel')->name('ipd.cancel');
	Route::resource('/ipd','ipdController');
	Route::post('/opd/{id}/active','opdController@active')->name('opd.active');
	Route::post('/opd/{id}/complete','opdController@complete')->name('opd.complete');
	Route::post('/opd/{id}/cancel','opdController@cancel')->name('opd.cancel');
	Route::resource('/opd','opdController');
	Route::resource('/thisMonth','ThisMonthController');
});

// Doctor access
Route::group(['as'=>'doctor.','prefix'=>'doctor','namespace'=>'Doctor','middleware'=>['auth','doctor']], function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
	Route::resource('/profile','ProfileController');
	Route::post('/ipd/{id}/active','ipdController@active')->name('ipd.active');
	Route::post('/ipd/{id}/complete','ipdController@complete')->name('ipd.complete');
	Route::post('/ipd/{id}/cancel','ipdController@cancel')->name('ipd.cancel');
	Route::resource('/ipd','ipdController');
	Route::post('/opd/{id}/active','opdController@active')->name('opd.active');
	Route::post('/opd/{id}/complete','opdController@complete')->name('opd.complete');
	Route::post('/opd/{id}/cancel','opdController@cancel')->name('opd.cancel');
	Route::resource('/opd','opdController');
});

// Hospital access
Route::group(['as'=>'hospital.','prefix'=>'hospital','namespace'=>'Hospital','middleware'=>['auth','hospital']], function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
	Route::resource('/profile','ProfileController');
	Route::resource('/ipd','ipdController');
	Route::resource('/opd','opdController');
});

// User access
Route::group(['as'=>'user.','prefix'=>'user','namespace'=>'User','middleware'=>['auth','user']], function(){
	Route::get('/dashboard','DashboardController@index')->name('dashboard');
	Route::resource('/profile','ProfileController');
	Route::post('/ipd/{id}/active','ipdController@active')->name('ipd.active');
	Route::post('/ipd/{id}/complete','ipdController@complete')->name('ipd.complete');
	Route::post('/ipd/{id}/cancel','ipdController@cancel')->name('ipd.cancel');
	Route::resource('/ipd','ipdController');
	Route::post('/opd/{id}/active','opdController@active')->name('opd.active');
	Route::post('/opd/{id}/complete','opdController@complete')->name('opd.complete');
	Route::post('/opd/{id}/cancel','opdController@cancel')->name('opd.cancel');
	Route::resource('/opd','opdController');
});


// test
Route::resource('/sms', 'smsController');
Route::resource('/consult', 'ConsultController');
Route::get('/consult-doctor', 'ConsultController@doctor');
Route::get('/user-details', function () {
    return view('frontend.consult.user-details');
});