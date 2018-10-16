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

Route::resource('posters','PostersController');
Route::get('/poster/create', 'PostersController@create')->name('poster.create');
Route::post('/poster/store', 'PostersController@store')->name('poster.store');
Route::get('/posters', 'PostersController@index')->name('poster.index');


Route::resource('frames','FrameController');
Route::get('/frame/create', 'FrameController@create')->name('frame.create');
Route::post('/frame/store', 'FrameController@store')->name('frame.store');
Route::get('/frames', 'FrameController@index')->name('frame.index');

Route::get('/step2', 'PostersController@textOverlay')->name('poster.textOverlay');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
