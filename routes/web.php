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
/*
Route::get('/', function () {
    return view('welcome');
});
/*
Route::get('index', function (){
    echo "Olá Mundo";
});
*/
Route::get('/series', 'SeriesController@index');
//nova rota para função de criar nova serie
Route::get('/series/criar', 'SeriesController@create');
