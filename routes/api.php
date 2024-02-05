<?php

use App\Models\Categoria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::delete('categorias/{id}', function($id) {
    Categoria::find($id)->delete();

    return response()->json(null, 204);
});
