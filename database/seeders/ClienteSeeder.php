<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Faker\Factory as Faker;
use Carbon\Carbon;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i=1; $i<=250; $i++)
        {
            $mayor_edad = Carbon::now()->addYear(-18)->format('Y-m-d');
            $fecha_cumpleaños =$faker->dateTimeBetween('1950-01-01', $mayor_edad)->format('Y-m-d');

            Cliente::create(
                [
                    'nombre'=>$faker->name(),
                    'nit'=>$faker->randomNumber(9),
                    'telefono'=>$faker->phoneNumber(),
                    'nacimiento'=>$fecha_cumpleaños
                ]
            );
        }
    }
}
