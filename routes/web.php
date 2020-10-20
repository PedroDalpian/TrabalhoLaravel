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


Route::get('quadras', 'QuadrasController@index');
Route::get('quadras/create', 'QuadrasController@create');
Route::post('quadras/store', 'QuadrasController@store');

Route::get('times', 'TimesController@index');
Route::get('times/create', 'TimesController@create');
Route::post('times/store', 'TimesController@store');

Route::get('reservas', 'ReservasController@index');
Route::get('reservas/create', 'ReservasController@create');
Route::post('reservas/store', 'ReservasController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
