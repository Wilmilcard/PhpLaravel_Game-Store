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
        Plataforma::create(['nombre'=>'PC']);
        Plataforma::create(['nombre'=>'Xbox']);
        Plataforma::create(['nombre'=>'PlayStation']);
        Plataforma::create(['nombre'=>'Nintendo']);
        Plataforma::create(['nombre'=>'Android']);
    }
}
