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

// landing page
Route::get('/', function () {
    return view('pages.landing');
});

// registration and authentication functionality
Route::group(['middleware' => 'guest'], function() {
	Route::get('register', 'UserController@getRegister');
	Route::post('register', 'UserController@postRegister');

	// named route needed for re-directing routes in the auth group
	// further down
	Route::get('login', [
		'as' => 'login',
		'uses' => 'AuthController@getLogin',
	]);

	Route::post('login', 'AuthController@postLogin');
});

// for these routes you need to be authenticated
Route::group(['middleware' => 'auth'], function() {
	// logout functionality
	Route::get('logout', 'AuthController@getLogout');
});