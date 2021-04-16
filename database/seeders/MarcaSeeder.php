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
        $marca = new Marca();
        $marca->nombre = "Microsoft";
        $marca->save();

        $marca = new Marca();
        $marca->nombre = "Sony";
        $marca->save();

        $marca = new Marca();
        $marca->nombre = "EA";
        $marca->save();

        $marca = new Marca();
        $marca->nombre = "Ubisoft";
        $marca->save();

        $marca = new Marca();
        $marca->nombre = "Rovio";
        $marca->save();

        $marca = new Marca();
        $marca->nombre = "Activision";
        $marca->save();

        $marca = new Marca();
        $marca->nombre = "Nintendo";
        $marca->save();
    }
}
