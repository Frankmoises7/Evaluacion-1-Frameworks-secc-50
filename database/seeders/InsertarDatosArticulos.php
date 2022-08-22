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
        DB::table('articulos')-> insert(array(
            [
                'codigo' => '1',
                'nombre' => 'Lápiz Mina',
                'categoria_id' => 1,
                'stock' => 10000,                  
                'descripcion' => 'Lápiz de grafito hecho por esclavos enanos en las montañas',
            ],
    
            [
                'codigo' => '2',
                'nombre' => 'Cuaderno universitario',
                'category_id' => 1,
                'stock' => 10000,                  
                'descripcion' => 'Cuaderno de 100 hojas con un macaco en la portada',
            ],
    
            [
                'codigo' => '3',
                'nombre' => 'Corrector',
                'categoria_id' => 1,
                'stock' => 9000,                  
                'descripcion' => 'Lápiz corrector de equivocaciones, no puedes corregirte con él',
            ],
            [
                'codigo' => '4',
                'nombre' => 'Marcadores Multicolores',
                'categoria_id' => 1,
                'stock' => 10000,                  
                'descripcion' => 'Marcadores de 3cm x 10 cm de muchos colores',
            ],
            [
                'codigo' => '5',
                'nombre' => 'Cola Fría',
                'categoria_id' => 2,
                'stock' => 8000,                  
                'descripcion' => 'Pegamento para maderas, papel y huesos',
            ],
            [
                'codigo' => '6',
                'nombre' => 'Tijeras',
                'categoria_id' => 1,
                'stock' => 7000,                  
                'descripcion' => 'Tijeras sin filo, para preescolar',
            ],
            [
                'codigo' => '7',
                'nombre' => 'Cartulina',
                'categoria_id' => 3,
                'stock' => 7000,                  
                'descripcion' => 'Cartulinas vario color para disertaciones a última hora',
            ],
            [
                'codigo' => '8',
                'nombre' => 'Témpera',
                'categoria_id' => 4,
                'stock' => 5000,                  
                'descripcion' => 'Temperas de 12 colores, si las mezclas creas el mejor color',
            ],
        ));

    $this->command->info("Datos Agregados correctamente");
    }
}
