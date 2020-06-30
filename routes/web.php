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
    return view('index');
});

Route::get('/galaxia', 'GalaxiaControler@show');
Route::get('/galaxia/nova', 'GalaxiaController@create');
Route::post('/galaxia/nova', 'GalaxiaController@store');

Route::get('/planeta/novo', 'PlanetaController@create');
Route::post('/planeta/novo', 'PlanetaController@store');

Route::get('/sistema/novo', 'SistemaController@create');
Route::post('/sistema/novo', 'SistemaController@store');

