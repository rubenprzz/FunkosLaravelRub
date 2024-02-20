<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Funko;
use Illuminate\Http\Request;
use Nette\Schema\ValidationException;

class FunkoController extends Controller
{
    public function index()
    {
        return $funkos= Funko::all();

    }
    public function store(Request $request)
    {
     try{
         $validated =$request->validate([
             'nombre' => 'required',
             'modelo' => 'required',
             'precio' => 'required',
             'cantidad' => 'required'
         ]);
         return Categoria::create($request->all());
     }catch (ValidationException $e){
         return response()->json(['error' => $e->validator->errors()], 400);
     }

    }
    public function show($id)
    {
        return Funko::findOrFail($id);
    }
    public function destroy($id)
    {
        $funkos = Funko::findOrFail($id);
        $funkos->delete();
        return 204;
    }
}
