<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marca::create(['nombre'=>'Microsoft']);
        Marca::create(['nombre'=>'Sony']);
        Marca::create(['nombre'=>'EA']);
        Marca::create(['nombre'=>'Ubisoft']);
        Marca::create(['nombre'=>'Rovio']);
        Marca::create(['nombre'=>'Activision']);
        Marca::create(['nombre'=>'Nintendo']);
        Marca::create(['nombre'=>'Rockstar']);
        Marca::create(['nombre'=>'CD Project Red']);
    }
}
