<?php

use Illuminate\Support\Facades\Route;

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

/* Archivo o clase que responde cuando llegamos a esa ruta */

/* Route::get('/', function () {
    return view('welcome'); // va directo a resources/views/welcome.blade.php
}); */

Route::get('/', 'UserController@index');

Route::post('users', 'UserController@store')->name('users.store'); // el name para referenciar en las vistas

Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');