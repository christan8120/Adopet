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

Route::get('/', 'PageController@login');
Route::get('/register', 'PageController@register');
Route::get('/informasi', 'PageController@informasi');

Route::post('/login/submit', 'UserController@login');
Route::post('/register', 'UserController@register');

Route::get('/index', 'PetController@index');
Route::get('/adoptIt/{id}', 'PetController@adoptIt');

Route::get('/findlove', 'PageController@findlove');

Route::get('/signout','UserController@signout');

Route::get('/profile', 'PageController@profile');