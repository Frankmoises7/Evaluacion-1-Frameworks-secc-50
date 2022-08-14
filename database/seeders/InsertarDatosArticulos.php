<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosArticulos extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Insertando datos de Articulos
        DB::table('articulos')->insert(array(
            [
                'nombre' => 'Lápiz Mina',
                'stock' => 300,
                'precio' => '100',
                'sucursal_id' => 1
            ],
    
            [
                'nombre' => 'Cuaderno',
                'stock' => 100,
                'precio' => '400',
                'sucursal_id' => 2
            ],
    
            [
                'nombre' => 'Tijeras',
                'stock' => 200,
                'precio' => '300',
                'sucursal_id' => 1
            ],
            [
                'nombre' => 'Cartulina',
                'stock' => 400,
                'precio' => '150',
                'sucursal_id' => 2
            ],
            [
                'nombre' => 'Destacadores',
                'stock' => 300,
                'precio' => '300',
                'sucursal_id' => 1
            ],
            [
                'nombre' => 'Agendas',
                'stock' => 100,
                'precio' => '800',
                'sucursal_id' => 1
            ],
            [
                'nombre' => 'Lapiceras',
                'stock' => 300,
                'precio' => '200',
                'sucursal_id' => 2
            ],
            [
                'nombre' => 'Glitters',
                'stock' => 50,
                'precio' => '500',
                'sucursal_id' => 2
            ]
        ));

        $this->command->info("Datos agregados correctamente");
    }
}
