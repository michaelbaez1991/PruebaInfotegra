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
    return view('dashboard');
});

Route::resource('tasks', 'TaskController', ['except' => 'show']);

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');
Route::get('/consultar', 'HomeController@consultarClima');

Route::get('/test', 'HomeController@testfunction');

Route::view('/vue', 'vue')->name('vue');