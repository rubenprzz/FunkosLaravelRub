<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaTableSeeder extends Seeder
{
    public function run(): void
    {  Categoria::create([
        'nombre' => 'Categoria 1',
        'descripcion' => 'Descripcion Categoria 1'
    ]);

    }
}
