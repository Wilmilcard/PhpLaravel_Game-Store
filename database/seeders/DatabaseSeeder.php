<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(EstadoSeeder::class);
        $this->call(ProtagonistaSeeder::class);
        $this->call(MarcaSeeder::class);
        $this->call(PlataformaSeeder::class);
        $this->call(ClienteSeeder::class);
        $this->call(AlquilerSeeder::class);
        $this->call(DirectorSeeder::class);
        $this->call(JuegoSeeder::class);
        $this->call(PlataformaJuegoSeeder::class);
        $this->call(ProtagonistaJuegoSeeder::class);
        $this->call(AlquilerDetSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
