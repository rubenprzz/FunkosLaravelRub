<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\CategoriaController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/categorias', 'CategoriaController@index');
Route::get('/categorias/{id}', 'CategoriaController@show');
Route::post('/categorias', 'CategoriaController@store');
