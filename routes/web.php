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

Route::get('/', 'PostersController@index');

Route::get('/poster/create', 'PostersController@create');
Route::post('/poster/store', 'PostersController@store')->name('poster.store');


Route::get('/frame/create', 'FrameController@create');
Route::post('/frame/store', 'FrameController@store')->name('frame.store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
