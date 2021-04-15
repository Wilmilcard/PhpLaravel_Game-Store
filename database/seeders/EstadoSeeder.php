<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estado;
use Faker\Factory as Faker;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i=1; $i<=5; $i++)
        {
            Estado::create(
                [
                    'nombre'=>$faker->word()
                ]
            );
        }
    }
}
