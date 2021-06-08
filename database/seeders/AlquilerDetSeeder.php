<?php

namespace Database\Seeders;

use App\Models\Alquiler;
use App\Models\Alquiler_det;
use App\Models\Juego;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AlquilerDetSeeder extends Seeder
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
        $numero_alquileres=Alquiler::all()->count();

        for ($i=1; $i<=$numero_alquileres; $i++)
        {
            $numero_reservas = $faker->numberBetween(1,10);
            Alquiler_det::create(
                [
                    'id_alquiler'=>$faker->numberBetween(1,$numero_alquileres),
                    'id_juego'=>$faker->numberBetween(1,$numero_juegos),
                    'cantidad'=>$numero_reservas,
                    'valor'=>$numero_reservas * 15000
                ]
            );
        }
    }
}
