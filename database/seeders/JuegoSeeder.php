<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Juego;
use App\Models\Director;
use Carbon\Carbon;
use Faker\Factory as Faker;

class JuegoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $numero_directores=Director::all()->count();

        Juego::create([
            'nombre'=>'Assassins Creed I',
            'ano'=>'2001',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'GTA V',
            'ano'=>'2013',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'FIFA 17',
            'ano'=>'2016',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Minecraft',
            'ano'=>'2011',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Gears Of War',
            'ano'=>'2011',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Watch_Dogs',
            'ano'=>'2014',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat
            (2,17000,50000)]);


        Juego::create([
            'nombre'=>'The Witcher 3',
            'ano'=>'2015',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Pokemon',
            'ano'=>'1996',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Age Of Empires II',
            'ano'=>'1999',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Red Dead Redemption II',
            'ano'=>'2018',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'DOOM',
            'ano'=>'2014',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);


        Juego::create([
            'nombre'=>'Pong',
            'ano'=>'1972',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);


        Juego::create([
            'nombre'=>'The Sims',
            'ano'=>'2001',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Halo',
            'ano'=>'2001',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);


        Juego::create([
            'nombre'=>'Angry Birds',
            'ano'=>'2009',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Plants vs Zombies',
            'ano'=>'2008',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Battlefield 3',
            'ano'=>'2011',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Fligth Simulation',
            'ano'=>'2020',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

    }
}
