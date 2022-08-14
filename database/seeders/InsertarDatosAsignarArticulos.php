<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosAsignarArticulos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('asignarArticulos')-> insert(array(
            [
                'articulo_id' => 9,
                'sucursal_id' => 1,
                'stockSucursal' => 100,                  
                'precio' => 100,
            ],
    
            [
                'articulo_id' => 9,
                'sucursal_id' => 1,
                'stockSucursal' => 100,                  
                'precio' => 400,
            ],
    
            [
                'articulo_id' => 10,
                'sucursal_id' => 2,
                'stockSucursal' => 200,                  
                'precio' => 300,
            ],
            [
                'articulo_id' => 10,
                'sucursal_id' => 2,
                'stockSucursal' => 400,                  
                'precio' => 150,
            ],
            [
                'articulo_id' => 11,
                'sucursal_id' => 3,
                'stockSucursal' => 300,                  
                'precio' => 300,
            ],
            [
                'articulo_id' => 12,
                'sucursal_id' => 3,
                'stockSucursal' => 100,                  
                'precio' => 800,
            ],
            [
                'articulo_id' => 11,
                'sucursal_id' => 1,
                'stockSucursal' => 301,                  
                'precio' => 200,
            ],
            [
                'articulo_id' => 14,
                'sucursal_id' => 2,
                'stockSucursal' => 50,                  
                'precio' => 500,
            ],
        ));

    $this->command->info("Datos Agregados correctamente");
    }
}
