<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; //libreria nos permite hacer insert
use Illuminate\Support\Str; //liberaria para funciones str

class carrito extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Esto es basandome completamente en el ejemplo que tenemos no hay mucho que explicar
        //Con unos pocos numeros randoms y ya usando las funcionese de laravel
        //LIMPIAR LA TABLA SI DA ALGUN ERROR YA QUE USA ESTE SEEDER DE LA ID 0 A LA 10
        for($i =0; $i<=10; $i++)
        {
            $numeroAleatorio = random_int(0,100);
            $numeroAleatoriod = random_int(0,100)/10;
            $CTotal = $numeroAleatoriod * $numeroAleatorio;
            DB::table('carrito')->insert([
                'Producto' => Str::random(10),
                'Cantidad' => $numeroAleatorio,
                'PrecioU' => $numeroAleatoriod,
                'Total' => $CTotal,
            ]);
        }
    }
}
