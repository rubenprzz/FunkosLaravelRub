<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;
use Illuminate\Validation\ValidationException;

class CategoriaController extends Controller
{
    public function index()
    {
        return $categorias= Categoria::all();

    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'nombre' => 'required',
                'descripcion' => 'required',
            ]);

            return Categoria::create($request->all());
        } catch (ValidationException $e) {
            return response()->json(['error' => $e->validator->errors()], 400);
        }
    }

    public function show($id)
    {
        return Categoria::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $categorias = Categoria::findOrFail($id);
        $categorias->update($request->all());
        return $categorias;
    }

    public function destroy($id)
    {
        $categorias = Categoria::findOrFail($id);
        $categorias->delete();

        return 204;
    }
}
