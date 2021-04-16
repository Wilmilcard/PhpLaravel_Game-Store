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
        $faker = Faker::create();

        for($i=1; $i<=10; $i++)
        {
            Protagonista::create(
                [
                    'nombre'=>$faker->name()
                ]
            );
        }

        //
    }
}
