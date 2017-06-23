<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| holayyhg
*/

Route::get('/', function () {
    return view('Site/Index');
});

Route::get('index', function () {
    return view('Site/building');
});

Route::group(['prefix' => 'noticias'], function(){

	Route::get('articulos',[ 'uses' => 'ArticuloController@index', 'as'   => 'noticias.index'  ]);
});
