<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosRegiones extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insertando datos de Regiones
        DB::table('regiones')->insert(array(
            [
                'nombre' => 'Tarapacá',
                'numero' => 1,
                'sigla' => 'I',
            ],
            [
                'nombre' => 'Antofagasta',
                'numero' => 2,
                'sigla' => 'II',
            ],
            [
                'nombre' => 'Atacama',
                'numero' => 3,
                'sigla' => 'III',
            ],
            [
                'nombre' => 'Coquimbo',
                'numero' => 4,
                'sigla' => 'IV',
            ],
            [
                'nombre' => 'Valparaiso',
                'numero' => 5,
                'sigla' => 'V',
            ],
            [
                'nombre' => "Libertador General Bernardo O'Higgins",
                'numero' => 6,
                'sigla' => 'VI',
            ],
            [
                'nombre' => 'Maule',
                'numero' => 7,
                'sigla' => 'VII',
            ],
            [
                'nombre' => 'Biobío',
                'numero' => 8,
                'sigla' => 'VIII',
            ],
            [
                'nombre' => 'La Araucanía',
                'numero' => 9,
                'sigla' => 'IX',
            ],
            [
                'nombre' => 'Los Lagos',
                'numero' => 10,
                'sigla' => 'X',
            ],
            [
                'nombre' => 'Aysén del General Carlos Ibañez del Campo',
                'numero' => 11,
                'sigla' => 'XI',
            ],
            [
                'nombre' => 'Magallanes y Antártica Chilena',
                'numero' => 12,
                'sigla' => 'XII',
            ],
            [
                'nombre' => 'Metropolitana',
                'numero' => 13,
                'sigla' => 'RM',
            ],
            [
                'nombre' => 'Los Rios',
                'numero' => 14,
                'sigla' => 'XIV',
            ],
            [
                'nombre' => 'Arica y Parinacota',
                'numero' => 15,
                'sigla' => 'XV',
            ],
            [
                'nombre' => 'Ñuble',
                'numero' => 16,
                'sigla' => 'XVI',
            ],
        ));
    }
}
