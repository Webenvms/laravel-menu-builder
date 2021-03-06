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
Route::get('menu', 'MenuController@index')->name('menu');
Route::post('menu', 'MenuController@update')->name('menu.update');
Route::get('menu/build', 'MenuController@builder')->name('menu.builder');


