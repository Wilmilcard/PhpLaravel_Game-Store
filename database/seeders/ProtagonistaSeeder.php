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
        Protagonista::create(['nombre'=>'Gordon Freeman']);
        Protagonista::create(['nombre'=>'Joel']);
        Protagonista::create(['nombre'=>'Jill Valentine']);
        Protagonista::create(['nombre'=>'Zelda']);
        Protagonista::create(['nombre'=>'Link']);
        Protagonista::create(['nombre'=>'Glados']);
        Protagonista::create(['nombre'=>'Meet Boy']);
        Protagonista::create(['nombre'=>'Geralt de Rivia']);
        Protagonista::create(['nombre'=>'Steve']);
        Protagonista::create(['nombre'=>'Ellie']);
        Protagonista::create(['nombre'=>'Faith']);
        Protagonista::create(['nombre'=>'Bayonetta']);
        Protagonista::create(['nombre'=>'Tracer']);
        Protagonista::create(['nombre'=>'Pacman']);
        Protagonista::create(['nombre'=>'Chris Redfield']);
        Protagonista::create(['nombre'=>'Leon S. Kennedy']);
        Protagonista::create(['nombre'=>'Agente 47']);
        Protagonista::create(['nombre'=>'Haytham Kenway']);
        Protagonista::create(['nombre'=>'Lara Croft']);

    }
}
