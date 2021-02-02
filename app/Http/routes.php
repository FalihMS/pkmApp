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

//Route::get('/', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
//
Route::get('/aaa', function () {
    return view('vendor.notifications.email');
});

Route::get('/', 'HomeController@index');
Route::post('/login_test', 'LoginController@authenticate');
Auth::routes();

//Route::get('forgotPassword', function () {
//    return view('auth.passwords.email');
//};
Route::get('admin/list', 'RegisterAdminController@index')->middleware('admin');
Route::post('admin/addAdmin', 'RegisterAdminController@store')->middleware('admin');
Route::get('admin/update/{id}', 'AdminController@updateStatus');

Route::get('/admin', 'AdminController@index')->middleware('admin');
Route::get('/admin/showSession', 'AdminController@showSession')->middleware('admin');
Route::get('/admin/showTerm', 'AdminController@showTerm')->middleware('admin');
Route::get('/admin/pkm', 'AdminController@showAll')->middleware('admin');
Route::get('/admin/pkm/{id}', 'AdminController@showAllByTerm')->middleware('admin');
Route::get('/admin/export', 'AdminController@export')->middleware('admin');

Route::resource('/admin/showRegion', 'RegionController');
Route::resource('/admin/showType', 'PkmTypeController');
Route::resource('/admin/showMajor', 'MajorController');
Route::get('/admin/showTerm/{id}', 'TermController@show')->middleware('super_admin');

Route::resource('pkm', 'PkmController');
Route::get('/pkm/successLogin', 'HomeController@afterRegister');
Route::get('pkm/class/{region}/{type}', 'PkmController@getClass');
Route::get('pkm/lecturer/{class}', 'PkmController@getLecturer');
Route::get('api/major/', 'MajorController@showJson');
Route::get('changeTitle/{id}', 'PkmController@show');
Route::get('/download/{id}', 'AdminController@download');
Route::get('admin/downloadFolder/{id}', 'AdminController@downloadFolder')->middleware('admin');

Route::resource('lecturer', 'LecturerController');
Route::get('lecturer/{id}', 'LecturerController@show');
Route::get('lecturer/update/{id}', 'LecturerController@updateStatus');

Route::get('session/{id}', 'SessionController@show');
Route::resource('session', 'SessionController');

Route::get('class/add/{id}', 'ClassController@show');
Route::get('class/update/{id}', 'ClassController@updateStatus');
Route::post('class', 'ClassController@store');

Route::post('term/status', 'TermController@update_status');
Route::resource('term', 'TermController');

Route::get('test', 'PkmController@test');

Route::get('/home', 'HomeController@index');

Route::resource('upload', 'UploadController');
//Route::resource('adminRegis','RegisterAdminController');

Route::get('changePwd', function () {
    return view('user.reset_pwd');
});
Route::post('resetpwd', 'UserController@reset');

Route::get('admin/getIp/{action}', 'AdminController@log');

Route::get('/admin/viewLog', 'AdminController@viewLog')->middleware('super_admin');
