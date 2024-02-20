<?php

namespace Database\Seeders;

use App\Models\Funko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FunkoTableSeeder extends Seeder
{

    public function run(): void
    {
        Funko::create([
            'nombre'=> 'Funko Kaido',
            'modelo'=> 'Kaido Base',
            'precio'=> 3.99,
            'cantidad'=> 10,
            'categoria_id'=>1,
            'isDeleted'=>false

        ]);
        Funko::create([
            'nombre'=> 'Funko Itadori',
            'modelo'=> 'Tranje Base',
            'precio'=> 10.99,
            'cantidad'=> 10,
            'categoria_id'=>1,
            'isDeleted'=>false

        ]);
    }
}
