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


Route::get('/', "HomeController@index")->name("home");

Route::get('/template/{template}/{title?}', "TemplateController@show");

Route::get('/demo/{demo}', "DemoController@index");

Route::get('/download/{download}', "DownloadController@index");

Route::get('/login', "SessionController@create")->name("login");

Route::post('/login', "SessionController@store");

Route::get('/logout', "SessionController@destroy");

Route::get('/register', "RegisterController@create");

Route::post('/register', "RegisterController@store");









Route::group(['middleware' => 'auth:web'], function () {


	Route::get('/panel', function (){
		
		return redirect('/panel/dashboard');

	});

	Route::get('/panel/dashboard', "PanelController@index");
	
	Route::get('/panel/templates', "TemplateController@index");

	Route::post('/panel/templates', "TemplateController@store");





});




Route::get('/api/get_more_template', "CustomApiController@getMoreTemplate");

Route::get('/api/likeToggle/{template}', "CustomApiController@likeToggle");

Route::get('/api/checkLogin', "CustomApiController@checkLogin");
