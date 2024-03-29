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
Route::post('/funkos', [FunkoController::class, 'store'])->name('funkos.create');
Route::get('/funkos/{funko}', [FunkoController::class, 'show'])->name('funkos.show');
Route::put('/funkos/{funkos}', [FunkoController::class, 'edit'])->name('funkos.edit');
Route::delete('/funkos/{funkos}', [FunkoController::class, 'destroy'])->name('funkos.destroy');


