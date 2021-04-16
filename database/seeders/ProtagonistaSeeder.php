<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Protagonista;
use Faker\Factory as Faker;

class ProtagonistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $protagonista = new Protagonista();
        $protagonista->nombre = "Mario Bross";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Tommy Vercetti";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Altaïr Ibn-La'Ahad";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Natan Drake";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Crash Bandicoot";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Samus Aran";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "John-117";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Aiden Perce";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Carl Jhonson";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Red";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Crazy Dave";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Spyro";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Marcus Fenix";
        $protagonista->save();

        $protagonista = new Protagonista();
        $protagonista->nombre = "Vass";
        $protagonista->save();

        /*
        $faker = Faker::create();
        for($i=1; $i<=10; $i++)
        {
            Protagonista::create(
                [
                    'nombre'=>$faker->name()
                ]
            );
        }
        */

        //
    }
}
