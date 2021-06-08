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
        Plataforma::create(['nombre'=>'Xbox 360']);
        Plataforma::create(['nombre'=>'Xbox ONE']);
        Plataforma::create(['nombre'=>'Xbox X']);
        Plataforma::create(['nombre'=>'PSP Vita']);
        Plataforma::create(['nombre'=>'PlayStation']);
        Plataforma::create(['nombre'=>'PlayStation 2']);
        Plataforma::create(['nombre'=>'PlayStation 3']);
        Plataforma::create(['nombre'=>'PlayStation 4']);
        Plataforma::create(['nombre'=>'PlayStation 5']);
        Plataforma::create(['nombre'=>'Nintendo 64']);
        Plataforma::create(['nombre'=>'Nintendo DS']);
        Plataforma::create(['nombre'=>'Nintendo Switch']);
        Plataforma::create(['nombre'=>'Android']);
        Plataforma::create(['nombre'=>'IOS']);
    }
}
