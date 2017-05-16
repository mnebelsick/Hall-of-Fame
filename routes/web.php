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

Route::get('/', 'InnovationsController@index');

Route::post('/', 'InnovationsController@store');

ROUTE::get('/innovations', function() {
	return view('innovations');
});

/*
Route::post('/', function () {
    return view('process-form');
});
*/