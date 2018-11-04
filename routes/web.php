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
Route::get('/register', function () {
    return view('register');
});

Route::get('/informasi', function () {
    return view('informasi');
});

Route::post('/login/submit', 'LoginController@login');
Route::post('/register', 'LoginController@register');
Route::get('/index', 'PetController@index');


// Route::get('post/create', 'Auth\RegisterController@create');
// Route::resource('/User', 'Auth\RegisterController');
// Route::post('/home', 'LoginController@login');
// Route::get('/login', 'LoginController@signout');