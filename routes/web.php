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

Route::get('/home', 'PelanggarController@index')->name('pelanggar.index')->middleware('auth');
Route::get('/monitoring', 'PelanggarController@indexMonitoring')->name('monitoring.index')->middleware('auth');
//Route::get('/pelanggar/cari', 'PelanggarController@search')->name('pelanggar.search');


Route::get('/register','LoginController@register')->middleware('guest')->name('register');
Route::post('/registerPost','LoginController@registerPost')->name('register.post');
Route::get('/login','LoginController@getLogin')->middleware('guest')->name('login');
Route::post('/login','LoginController@postLogin')->middleware('guest');
Route::get('/logout', 'LoginController@logout')->middleware('auth')->name('logout');