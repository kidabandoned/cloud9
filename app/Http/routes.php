<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

Route::get('/apple-store', function (){
	return view('index');
});

Route::get('/products', function (){
	return view('products');
});

Route::get('/contact-us', function (){
	return view('contact-us');
});

Route::get('/ipadair2', function (){
	return view('ipadair2');
});

Route::get('/ipadmini4', function (){
	return view('ipadmini4');
});
Route::get('/iphone6s', function (){
	return view('iphone6s');
});
Route::get('/iphone6splus', function (){
	return view('iphone6splus');
});
Route::get('/macbook', function (){
	return view('macbook');
});
Route::get('/macbookair', function (){
	return view('macbookair');
});
