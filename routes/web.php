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
Route::get('/',function(){
	return view('index');
});

// Login
Route::get('/login','LoginController@loginPageLoad')->name('loginView');

Route::post('/user/home','LoginController@userCheck')->name('userCheck');

// Register viewLoad
Route::get('/register','UserController@create')->name('registerView');
Route::post('/register','UserController@store')->name('registerCheck');

Route::get('/logout','LoginController@logout')->name('logout');

// For User Authenticated or not
Route::group(['middleware' => 'user'], function() {
     
	Route::get('/user/home','LoginController@userHome')->name('userHome');
	
	//User Registration
	Route::resource('/user','UserController');

	// SettingController

	Route::resource('user/settings','SettingsController');
    
});

// admin Routes

Route::group(['middleware' => 'admin'], function() {
     
    Route::get('admin/home/','AdminHomeController@adminHome')->name('adminHome');

	Route::resource('/admin','AdminController');

	Route::get('/setting/{id}','AdminSettingController@settingPageLoad')->name('adminSetting');
	Route::post('/updateSetting/{1}','AdminSettingController@updateSett');

	Route::get('/report','ReportController@userReport')->name('userReport');
   
});
 
