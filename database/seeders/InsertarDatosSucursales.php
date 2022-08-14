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
        DB::table('sucursales')-> insert(array(
            [
                'nombre' => 'Sucursal Santiago',
                'direccion' => 'Alameda 123',              
                'region_id' => 1,
            ],
    
            [
                'nombre' => 'Sucursal Arica',
                'direccion' => 'Norte 1234',              
                'region_id' => 5,
            ],
    
            [
                'nombre' => 'Sucursal Punta Arenas',
                'direccion' => 'Helado 1234',              
                'region_id' => 9,
            ],
        ));
    }
}
