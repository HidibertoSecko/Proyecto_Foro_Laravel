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



Route::get('/', 'UserController@index');
Route::get('user/nuevo', 'UserController@create')->name('user.nuevo');
Route::post('user/crear' , 'UserController@store')->name('user.crear');

Route::get('foro', 'ForoController@index');
Route::get('tema', 'ForoController@create')->name('foro.tema');
Route::post('tema/crear' , 'ForoController@store')->name('foro.crear');

Route::get('opinion/nuevo', 'OpinionController@create')->name('opinion.nuevaopinion');
Route::post('opinion/crear' , 'OpinionController@store')->name('opinion.crear');
Route::get('respuesta', 'OpinionController@index');

