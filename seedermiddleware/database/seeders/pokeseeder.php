<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class pokeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Esto es basandome completamente en el ejemplo que tenemos no hay mucho que explicar
        for($i =0; $i<=10; $i++)
        {
            DB::table('pokemon')->insert([
                'id' => $i,
                'Nombre' => Str::random(10),
                'Tipo' => 'Normal',
                'Tamaño' => 'Pequeño',
                'Peso' => 1.00,
            ]);
        }
    }
}
