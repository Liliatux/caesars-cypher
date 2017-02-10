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

Route::get('/', 'CaesarController@getIndex');

Route::get('/add', function () {
	return view('caesars/add');
});

Route::post('/addMessage', 'CaesarController@postMessage');