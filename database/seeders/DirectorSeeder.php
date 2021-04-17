<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Director;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Director::create(
            [
                'nombre'=>'Hideo Kojima',
                'id_marca'=>'2'
            ]
        );

        Director::create(
            [
                'nombre'=>'Will Wriths',
                'id_marca'=>'3'
            ]
        );

        Director::create(
            [
                'nombre'=>'Hidetaka Miyazaki',
                'id_marca'=>'2'
            ]
        );

        Director::create(
            [
                'nombre'=>'Tim Schafer',
                'id_marca'=>'1'
            ]
        );

        Director::create(
            [
                'nombre'=>'Ken Levine',
                'id_marca'=>'1'
            ]
        );

        Director::create(
            [
                'nombre'=>'Fumito Ueda',
                'id_marca'=>'2'
            ]
        );

        Director::create(
            [
                'nombre'=>'Yves Guillemot',
                'id_marca'=>'4'
            ]
        );

        Director::create(
            [
                'nombre'=>'Gabe Newell',
                'id_marca'=>'1'
            ]
        );

        Director::create(
            [
                'nombre'=>'Tom Howard',
                'id_marca'=>'6'
            ]
        );

        Director::create(
            [
                'nombre'=>'Yoko Taro',
                'id_marca'=>'7'
            ]
        );

        Director::create(
            [
                'nombre'=>'Shigeru Miyamoto',
                'id_marca'=>'7'
            ]
        );

        Director::create(
            [
                'nombre'=>'Amy Hennig',
                'id_marca'=>'5'
            ]
        );
    }
}
