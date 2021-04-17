<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estado;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estado::create(['nombre'=>'Activo']);
        Estado::create(['nombre'=>'Inactivo']);
        Estado::create(['nombre'=>'Devuelto']);
        Estado::create(['nombre'=>'Prestamo']);
        Estado::create(['nombre'=>'Error']);
    }
}
