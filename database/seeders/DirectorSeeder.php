<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Director;
use App\Models\Marca;
use Faker\Factory as Faker;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $numero_marcas=Marca::all()->count();

        Director::create(
            [
                'nombre'=>'Hideo Kojima',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Will Wriths',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Hidetaka Miyazaki',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Tim Schafer',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Ken Levine',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Fumito Ueda',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Yves Guillemot',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Gabe Newell',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Tom Howard',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Yoko Taro',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Shigeru Miyamoto',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Amy Hennig',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Michel Ancel',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Goichi Suda',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Warren Spector',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'John Romero',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Yuji Horii',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Yuji Naka',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Sid Meier',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'John Carmack',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Keiji Inafune',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

        Director::create(
            [
                'nombre'=>'Hironobu Sakaguchi',
                'id_marca'=>$faker->numberBetween(1,$numero_marcas)
            ]
        );

    }
}
