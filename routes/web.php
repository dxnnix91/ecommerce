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

Route::GET('/', function () {
    return view('welcome');
});


//Ruta de Auth
Route::GET('/login', 'ConnectController@login')->name('login');
Route::GET('/register', 'ConnectController@register')->name('register');
Route::POST('/user/register', 'ConnectController@userRegister')->name('userRegister');
Route::POST('/user/login', 'ConnectController@userLogin')->name('userLogin');
