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

Route::get('/login', function () {
    return view('login');
});

Route::post('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('post/create', 'Auth\RegisterController@create');
Route::post('post', 'Auth\RegisterController@store');
Route::resource('/User', 'Auth\RegisterController');

// Route::post('/home', 'LoginController@login');
// Route::get('/login', 'LoginController@signout');