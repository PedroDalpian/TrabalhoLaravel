<?php

use Illuminate\Support\Facades\Route;

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

Route::get('inicio', function () {
    return view('inicio');
});

/*
Route::get('quadras', function() {
    return "Olá! <br>Esta é a rota de listagem de quadras!";
});
*/

/*
Route::get('quadras', 'QuadrasController@index');
Route::get('quadras/create', 'QuadrasController@create');
Route::post('quadras/store', 'QuadrasController@store');
Route::get('quadras/{id}/destroy', 'QuadrasController@destroy');
Route::get('quadras/{id}/edit', 'QuadrasController@edit');
Route::put('quadras/{id}/update', 'QuadrasController@update');
*/
Route::group(['prefix'=>'quadras', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'quadras',            'uses'=>'QuadrasController@index'    ]);
    Route::get('create',        ['as'=>'quadras.create',     'uses'=>'QuadrasController@create'   ]);
    Route::get('{id}/destroy',  ['as'=>'quadras.destroy',    'uses'=>'QuadrasController@destroy'  ]);
    Route::get('{id}/edit',     ['as'=>'quadras.edit',       'uses'=>'QuadrasController@edit'     ]);
    Route::put('{id}/update',   ['as'=>'quadras.update',     'uses'=>'QuadrasController@update'   ]);
    Route::post('store',        ['as'=>'quadras.store',      'uses'=>'QuadrasController@store'    ]);
});

/*
Route::get('times', 'TimesController@index');
Route::get('times/create', 'TimesController@create');
Route::post('times/store', 'TimesController@store');
*/
Route::group(['prefix'=>'times', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'times',            'uses'=>'TimesController@index'    ]);
    Route::get('create',        ['as'=>'times.create',     'uses'=>'TimesController@create'   ]);
    Route::get('{id}/destroy',  ['as'=>'times.destroy',    'uses'=>'TimesController@destroy'  ]);
    Route::get('{id}/edit',     ['as'=>'times.edit',       'uses'=>'TimesController@edit'     ]);
    Route::put('{id}/update',   ['as'=>'times.update',     'uses'=>'TimesController@update'   ]);
    Route::post('store',        ['as'=>'times.store',      'uses'=>'TimesController@store'    ]);
});

/*
Route::get('reservas', 'ReservasController@index');
Route::get('reservas/create', 'ReservasController@create');
Route::post('reservas/store', 'ReservasController@store');
*/

Route::group(['prefix'=>'modalidades', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',              ['as'=>'modalidades',            'uses'=>'ModalidadesController@index'    ]);
    Route::get('create',        ['as'=>'modalidades.create',     'uses'=>'ModalidadesController@create'   ]);
    Route::get('{id}/destroy',  ['as'=>'modalidades.destroy',    'uses'=>'ModalidadesController@destroy'  ]);
    Route::get('{id}/edit',     ['as'=>'modalidades.edit',       'uses'=>'ModalidadesController@edit'     ]);
    Route::put('{id}/update',   ['as'=>'modalidades.update',     'uses'=>'ModalidadesController@update'   ]);
    Route::post('store',        ['as'=>'modalidades.store',      'uses'=>'ModalidadesController@store'    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
