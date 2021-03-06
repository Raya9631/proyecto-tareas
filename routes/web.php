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

Route::get('tareas/{nombre?}', function($nombre = "usuario"){//con ? puede o no recibirse y se le da un valor por defecto
    $nombre = strtoupper($nombre);
    return view('tareas/tareasIndex')->with(['nombre' => $nombre]);//pedir un aparametro en la url
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
