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
    return view('Site/Doc');
});

Route::get('prueba', function () {
    return view('Site/Index');
});

Route::group(['prefix' => 'page'], function(){

	Route::get('articulos',[ 'uses' => 'PageController@index', 'as'   => 'page.Index'  ]);

	Route::get('index',['as' => 'site.home', function(){ return view('Site/Index'); }]);
	Route::get('SV',['as' => 'site.sv', function(){ return view('Site/SignoVital'); }]);
	Route::get('RM',['as' => 'site.rm', function(){ return view('Site/RM'); }]);
	Route::get('VM',['as' => 'site.vm', function(){ return view('Site/Video'); }]);
	Route::get('DOC',['as' => 'site.doc', function(){ return view('Site/Doc'); }]);
	
});