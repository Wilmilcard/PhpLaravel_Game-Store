<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Plataforma;

class PlataformaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plataforma = new Plataforma();
        $plataforma->nombre = "PC";
        $plataforma->save();

        $plataforma = new Plataforma();
        $plataforma->nombre = "Xbox";
        $plataforma->save();

        $plataforma = new Plataforma();
        $plataforma->nombre = "PlayStation";
        $plataforma->save();

        $plataforma = new Plataforma();
        $plataforma->nombre = "Nintendo";
        $plataforma->save();

        $plataforma = new Plataforma();
        $plataforma->nombre = "Android";
        $plataforma->save();
    }
}
