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

Route::get('/aaa', function () {
    return view('vendor.notifications.email');
});

// Route::get('/', 'HomeController@index');
// Route::post('/login_test', 'LoginController@authenticate');
// Auth::routes();

//Route::get('forgotPassword', function () {
//    return view('auth.passwords.email');
//};

// Route::get('/admin/dashboard', 'WelcomeController@admin');
Route::get('/admin/{path}', function($path)
{
    return view('admin.'. $path);
});

Route::get('/user/{path}', function($path)
{
    return view('user.'. $path);
});
