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

// anybody can view the set of restaurants
Route::get('restaurants', 'RestaurantController@index');
Route::get('restaurants/{id}', 'RestaurantController@show');

// for these routes you need to be authenticated
Route::group(['middleware' => 'auth'], function() {
	Route::get('profile', 'UserController@getProfile');
	Route::get('profile/reviews', 'UserController@getMyReviews');

	// password changes
	Route::get('profile/changepassword', 'UserController@getChangePassword');
	Route::post('profile/changepassword', 'UserController@postChangePassword');

	// logout functionality
	Route::get('logout', 'AuthController@getLogout');

	// review functionality
	Route::get('restaurants/{id}/reviews/add', 'RestaurantController@getAddReview');
	Route::post('restaurants/{id}/reviews', 'RestaurantController@postAddReview');

	// for these routes you need to be an administrator
	Route::group(['middleware' => 'admin'], function() {
		Route::get('admin', 'AdminController@getAdminPanel');

		Route::get('admin/users', 'AdminController@getUsers');
		Route::post('admin/users/{id}/promote', 'AdminController@postPromoteUser');
		Route::post('admin/users/{id}/demote', 'AdminController@postDemoteUser');

		Route::get('admin/restaurants/create', 'RestaurantController@create');
		Route::post('admin/restaurants', 'RestaurantController@store');

		Route::get('restaurants/{id}/edit', 'RestaurantController@edit');
		Route::put('restaurants/{id}', 'RestaurantController@update');

		Route::get('restaurants/{id}/hours/add', 'RestaurantController@getAddHours');
		Route::post('restaurants/{id}/hours', 'RestaurantController@postAddHours');

		Route::get('restaurants/{id}/menu/add', 'RestaurantController@getAddMenuItem');
		Route::post('restaurants/{id}/menu', 'RestaurantController@postAddMenuItem');
	});
});