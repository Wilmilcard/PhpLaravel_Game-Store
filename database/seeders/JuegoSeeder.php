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
            'nombre'=>'Assassins Creed Valhalla',
            'ano'=>'2020',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'GTA III',
            'ano'=>'2001',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'GTA Vice City',
            'ano'=>'2002',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'GTA San Andreas',
            'ano'=>'2004',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'GTA IV',
            'ano'=>'2010',
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
            'nombre'=>'FIFA 18',
            'ano'=>'2017',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'FIFA 19',
            'ano'=>'2018',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'FIFA 20',
            'ano'=>'2019',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'FIFA 21',
            'ano'=>'2020',
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
            'nombre'=>'Watch_Dogs 2',
            'ano'=>'2018',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat
            (2,17000,50000)]);

        Juego::create([
            'nombre'=>'The Witcher',
            'ano'=>'2007',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'The Witcher 2',
            'ano'=>'2011',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

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
            'nombre'=>'Age Of Empires',
            'ano'=>'1997',
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
            'nombre'=>'Age Of Empires III',
            'ano'=>'2005',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Age Of Empires IV',
            'ano'=>'2022',
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
            'nombre'=>'The Sims II',
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

        Juego::create([
            'nombre'=>'Chivarly II',
            'ano'=>'2021',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Pureya',
            'ano'=>'2021',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Rust',
            'ano'=>'2021',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Mass Effect: Legendary Edition',
            'ano'=>'2021',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Cyberpunk 2077',
            'ano'=>'2021',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'The Last of Us 2',
            'ano'=>'2020',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Overwatch',
            'ano'=>'2016',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'NBA 2K21',
            'ano'=>'2020',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Fortnite',
            'ano'=>'2017',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Star Wars: Squadrons',
            'ano'=>'2021',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Resident Evil 8: Village',
            'ano'=>'2021',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

        Juego::create([
            'nombre'=>'Heroes of the Storm',
            'ano'=>'2015',
            'id_director'=>$faker->numberBetween(1,$numero_directores),
            'stock'=>$faker->numberBetween(5,100),
            'precio'=>$faker->randomFloat(2,17000,50000)
        ]);

    }
}
