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
    return view('welcome');
});


//Ruta de Auth
Route::get('/login', 'ConnectController@login')->name('login');
Route::get('/register', 'ConnectController@register')->name('register');
Route::post('/user/register', 'ConnectController@userRegister')->name('userRegister');
Route::post('/user/login', 'ConnectController@userLogin')->name('userLogin');
Route::get('/user/logout', 'ConnectController@userLogout')->name('userLogout');
