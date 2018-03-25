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
return view('Site/Index');
*/

Route::get('/', function () {
    return view('main');
});

Route::get('index', function () {
    return view('Site/building');
});
/*
*/
Route::group(['prefix' => 'noticias'], function(){
	Route::get('index',[ 'uses' => 'ArticuloController@index', 'as'   => 'noticias.index'  ]);
	Route::get('show',[ 'uses' => 'ArticuloController@showAll', 'as'   => 'noticias.show'  ]);
	Route::post('save',[ 'uses' => 'ArticuloController@store', 'as'   => 'noticias.store'  ]);
	Route::get('delete_articulos/{id}',[ 'uses' => 'ArticuloController@destroy', 'as'   => 'noticias.destroy'  ]);
	Route::post('articulos/{id}/edit',[ 'uses' => 'ArticuloController@edit', 'as'   => 'noticias.edit'  ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
