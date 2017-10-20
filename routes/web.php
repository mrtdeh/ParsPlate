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

Route::get('/', "HomeController@index");

Route::get('/template/{template}/{title?}', "TemplateController@show");

Route::get('/demo/{demo}', "DemoController@show");

Route::get('/download/{download}', "DownloadController@show");

Route::get('/login', "SessionController@create")->name("login");

Route::post('/login', "SessionController@store");




Route::get('/panel', function (){
	
	return redirect('/panel/dashboard');

});

Route::get('/panel/dashboard', "PanelController@index");

Route::get('/panel/templates', "TemplateController@index");

Route::post('/panel/templates', "TemplateController@store");


