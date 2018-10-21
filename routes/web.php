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

Route::get('/', function () {
    return view('login');
});
Route::post('/login', 'LoginController@login');
Route::get('/home', 'LoginController@showHome');

Route::get('/register', function () {
    return view('register');
});
Route::resource('/User', 'Auth\RegisterController');
Route::post('post/create', 'Auth\RegisterController@create');
Route::post('/post', 'Auth\RegisterController@store');

// Route::post('/home', 'LoginController@login');
// Route::get('/login', 'LoginController@signout');