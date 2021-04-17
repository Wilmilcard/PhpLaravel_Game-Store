<?php

namespace Database\Seeders;

use App\Models\Juego;
use App\Models\Protagonista;
use App\Models\Protagonista_juego;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ProtagonistaJuegoSeeder extends Seeder
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
        $numero_protagonistas=Protagonista::all()->count();

        for ($i=1; $i<=$numero_juegos; $i++)
        {
            Protagonista_juego::create(
                [
                    'id_juego'=>$i,
                    'id_protagonista'=>$faker->numberBetween(1,$numero_protagonistas)
                ]
            );
        }
    }
}
