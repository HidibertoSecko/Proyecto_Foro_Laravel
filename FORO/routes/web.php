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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/registrarse', function(){
	return view('registrarse');
});

Route::post('/registrarse', function(){
	$usuario = Input::get('usuario');
	$password= Input::get('password');

	echo $usuario."-".$password;
});
