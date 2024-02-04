<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Strings random y numeros randoms
        //LIMPIAR LA TABLA SI DA ALGUN ERROR YA QUE USA ESTE SEEDER DE LA ID 0 A LA 10
        for($i = 0; $i<=10; $i++)
        {
            $caleatorio = random_int(0, 100);
            $caleatoriod = random_int(0, 100)/ 10;
            DB::table('productos')->insert([
                'id' => $i,
                'Nombre' => Str::random(10),
                'Descripción' => Str::random(10),
                'Unidades' => $caleatorio,
                'PrecioU' => $caleatoriod,
                'Categoria' => 0,
            ]);
        }
    }
}
