<?php

namespace Database\Seeders;

use App\Models\Juego;
use App\Models\Plataforma;
use App\Models\Plataforma_juego;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PlataformaJuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $numero_juegos=Juego::All()->count();
        $numero_plataformas=Plataforma::all()->count();

        for ($i=1; $i<=$numero_juegos; $i++)
        {
            Plataforma_juego::create(
                [
                    'id_juego'=>$i,
                    'id_plataforma'=>$faker->numberBetween(1,$numero_plataformas)
                ]
            );
        }
    }
}
