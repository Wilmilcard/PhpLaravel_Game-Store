<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Protagonista;

class ProtagonistaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Protagonista::create(['nombre'=>'Mario Bross']);
        Protagonista::create(['nombre'=>'Tommy Vercetti']);
        Protagonista::create(['nombre'=>"Altaïr Ibn-La'Ahad"]);
        Protagonista::create(['nombre'=>'Natan Drake']);
        Protagonista::create(['nombre'=>'Crash Bandicoot']);
        Protagonista::create(['nombre'=>'Samus Aran']);
        Protagonista::create(['nombre'=>'John-117']);
        Protagonista::create(['nombre'=>'Aiden Perce']);
        Protagonista::create(['nombre'=>'Carl Jhonson']);
        Protagonista::create(['nombre'=>'Red']);
        Protagonista::create(['nombre'=>'Crazy Dave']);
        Protagonista::create(['nombre'=>'Spyro']);
        Protagonista::create(['nombre'=>'Marcus Fenix']);
        Protagonista::create(['nombre'=>'Vass']);

    }
}
