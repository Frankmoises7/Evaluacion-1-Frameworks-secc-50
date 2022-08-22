<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InsertarDatosCategorias extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')-> insert(array(
            [
                'nombre' => 'Lápices',
            ],
    
            [
                'nombre' => 'Cuadernos y libretas',
            ],
            [
                'nombre' => 'Adhesivos',
            ],
            [
                'nombre' => 'Papelería',
            ],
            ));
            $this->command->info("Datos Agregados correctamente");
    }
}
