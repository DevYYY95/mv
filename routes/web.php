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
Route::post('/search', 'SearchController@index');
Route::post('/store', 'ClientController@store');
Route::post('/save','ClientController@save');

Route::get('/','ShowmovieController@index');

Route::get('/show/{id}','SearchController@detail');
Route::resource('show','ShowmovieController');

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/promotion', function () {
    return view('frontend.promotion');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});


Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');
//Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

Route::group(['middleware'=>'auth'],function(){
	Route::get('/admin','AdminController@index');
	Route::resource('client','ClientController');
	Route::resource('movie','MovieController');
	Route::resource('dashboard','DashboardController');
	Route::resource('seat','SeatController');
	Route::resource('cast','CastController');
	Route::resource('crew','CrewController');
	Route::resource('cinema','CinemaController');
	Route::get('/home', 'HomeController@index')->name('home');

});

