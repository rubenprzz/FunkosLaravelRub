<?php

use App\Http\Controllers\FunkoController;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
Route::get('/', function () {
    return redirect()->route('funkos.index');
});
Route::get('/categorias', [CategoriaController::class, 'index']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::get('/categorias/{categorias}', [CategoriaController::class, 'show']);
Route::put('/categorias/{categorias}', [CategoriaController::class, 'update']);
Route::delete('/categorias/{categorias}', [CategoriaController::class, 'destroy']);
Route::get('/funkos', [FunkoController::class, 'index'])->name('funkos.index');
Route::post('/funkos', [FunkoController::class, 'store']);
Route::get('/funkos/{funkos}', [FunkoController::class, 'show']);
Route::put('/funkos/{funkos}', [FunkoController::class, 'update']);
Route::delete('/funkos/{funkos}', [FunkoController::class, 'destroy']);


