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


Route::get('/videos', function () {
    return view('videos/show');
});

Route::get('/viewAll', function () {
    return view('videos/showall');
});

Route::post('videos','SearchVideosController@index');

Route::post('viewAll','SearchVideosController@getAll');


