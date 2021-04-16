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

        $estado = new Estado();
        $estado->nombre = "Activo";
        $estado->save();

        $estado = new Estado();
        $estado->nombre = "Inactivo";
        $estado->save();

        $estado = new Estado();
        $estado->nombre = "Devuelto";
        $estado->save();

        $estado = new Estado();
        $estado->nombre = "En Prestamo";
        $estado->save();

        /*
        $faker = Faker::create();
        for ($i=1; $i<=3; $i++)
        {
            Estado::create(
                [
                    'nombre'=>$faker->word()
                ]
            );
        }
        */
    }
}
