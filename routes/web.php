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
use App\Http\Middleware;

Route::get('/', 'PageController@login')->middleware(Middleware\guestCheck::class);
Route::get('/register', 'PageController@register')->middleware(Middleware\guestCheck::class);

Route::post('/login/submit', 'UserController@login')->middleware(Middleware\guestCheck::class);
Route::post('/register', 'UserController@register')->middleware(Middleware\guestCheck::class);

Route::get('/loginProvider/{provider}', 'UserController@redirectToProvider');
Route::get('/loginProvider/{provider}/callback', 'UserController@handleProviderCallback');

Route::get('/index', 'PetController@index')->middleware(Middleware\SessionCheck::class);
Route::get('/adoptIt/{id}', 'PetController@adoptIt')->middleware(Middleware\SessionCheck::class);
Route::get('/informasi', 'KlinikController@index')->middleware(Middleware\SessionCheck::class);
Route::get('/findlove', 'PetController@findlove')->middleware(Middleware\SessionCheck::class);
Route::get('/profile', 'UserController@profile')->middleware(Middleware\SessionCheck::class);

Route::post('/savePet', 'PetController@savePet')->middleware(Middleware\SessionCheck::class);
Route::post('/saveList', 'PetController@saveFindLove')->middleware(Middleware\SessionCheck::class);
Route::get('acceptMate/{id}', 'PetController@acceptMate')->middleware(Middleware\SessionCheck::class);
Route::get('/signout','UserController@signout');
