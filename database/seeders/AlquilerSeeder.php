<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alquiler;
use App\Models\Cliente;
use App\Models\Estado;
use Faker\Factory as Faker;
use Carbon\Carbon;

class AlquilerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numero_clientes=Cliente::all()->count();
        $numero_estados=Estado::all()->count();
        $faker = Faker::create();
        for ($i=1; $i<=500; $i++)
        {
            $hoy = Carbon::now()->format('Y-m-d');//2021-04-16
            $fecha_reservacion =$faker->dateTimeBetween('2020-06-01', $hoy)->format('Y-m-d');
            $fecha_devolucion =$faker->dateTimeBetween('2020-06-15', $hoy)->format('Y-m-d');

            if($fecha_devolucion <= $fecha_reservacion)
            {
                $fecha_devolucion=Carbon::parse($fecha_reservacion)->addDay(15)->format('Y-m-d');
            }

            Alquiler::create(
                [
                    'id_cliente'=>$faker->numberBetween(1,$numero_clientes),
                    'valor_total'=>$faker->randomFloat(2,15000,100000),
                    'id_estado'=>$faker->numberBetween(1,$numero_estados),
                    'fecha_reservacion'=>$fecha_reservacion,
                    'fecha_devolucion'=>$fecha_devolucion
                ]
            );
        }
    }
}
