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
        'descripcion' => 'Descripcion Categoria 1',
        'isDeleted' => 'false'
    ]);
        Categoria::create([
            'nombre' => 'Categoria 2',
            'descripcion' => 'Descripcion Categoria 2',
            'isDeleted' => 'false'

        ]);
        Categoria::create([
            'nombre' => 'Categoria 3',
            'descripcion' => 'Descripcion Categoria 3',
            'isDeleted' => 'false'

        ]);
        Categoria::create([
            'nombre' => 'Categoria 4',
            'descripcion' => 'Descripcion Categoria 4',
            'isDeleted' => 'false'

        ]);

    }



}
