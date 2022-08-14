<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosSucursales extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sucursales')->insert(array(
            [
                'nombre' => 'Almacen 1',
                'direccion' => 'Direccion 1',
                'region_id' => 1
            ],
            [
                'nombre' => 'Almacen 2',
                'direccion' => 'Direccion 2',
                'region_id' => 2
            ],
        ));
    }
}
