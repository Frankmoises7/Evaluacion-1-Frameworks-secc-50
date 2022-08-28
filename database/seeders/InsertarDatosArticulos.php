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
                'descripcion' => 'Lápiz de grafito hecho por esclavos enanos en las montañas',
                'image' => 'https://www.dimeiggs.cl/media/catalog/product/cache/2/image/600x600/9df78eab33525d08d6e5fb8d27136e95/l/5/l501004_1_a.jpg'
            ],
    
            [
                'codigo' => '2',
                'nombre' => 'Cuaderno universitario',
                'category_id' => 1,            
                'descripcion' => 'Cuaderno de 100 hojas con un macaco en la portada',
                'image' => 'https://cdn.dimerc.cl/media/catalog/product/cache/1/thumbnail/x600/040ec09b1e35df139433887a97daa66f/d/c/dcc90ac20e1fac49b4bbcfc263c18e22.jpg'
            ],
    
            [
                'codigo' => '3',
                'nombre' => 'Corrector',
                'categoria_id' => 1,            
                'descripcion' => 'Lápiz corrector de equivocaciones, no puedes corregirte con él',
                'image' => 'https://www.grupocoensa.com/wp-content/uploads/2020/11/SKU-666-LAPIZ-CORRECTOR-LIQUID-PAPER-1.jpg'
            ],
            [
                'codigo' => '4',
                'nombre' => 'Marcadores Multicolores',
                'categoria_id' => 1,              
                'descripcion' => 'Marcadores de 3cm x 10 cm de muchos colores',
                'image' => 'https://casaideas.cl/media/catalog/product/3/2/3222310000014_1_3.jpg?optimize=low&bg-color=255,255,255&fit=bounds&height=1000&width=1000&canvas=1000:1000'
            ],
            [
                'codigo' => '5',
                'nombre' => 'Cola Fría',
                'categoria_id' => 2,          
                'descripcion' => 'Pegamento para maderas, papel y huesos',
                'image' => 'https://dojiw2m9tvv09.cloudfront.net/1405/product/colafria1206350.jpg'
            ],
            [
                'codigo' => '6',
                'nombre' => 'Tijeras',
                'categoria_id' => 1,                
                'descripcion' => 'Tijeras sin filo, para preescolar',
                'image' => 'https://www.dimeiggs.cl/media/catalog/product/cache/2/image/600x600/9df78eab33525d08d6e5fb8d27136e95/3/9/394590_1.jpg'
            ],
            [
                'codigo' => '7',
                'nombre' => 'Cartulina',
                'categoria_id' => 3,              
                'descripcion' => 'Cartulinas vario color para disertaciones a última hora',
                'image' => 'https://medios.papeleriamodelo.com/wp-content/uploads/2015/06/cartulina-fuertes.jpg'
            ],
            [
                'codigo' => '8',
                'nombre' => 'Témpera',
                'categoria_id' => 4,               
                'descripcion' => 'Temperas de 12 colores, si las mezclas creas el mejor color',
                'image' => 'https://arcoirislibreria.cl/wp-content/uploads/2021/01/LIB-13075-3.jpg'
            ],
        ));

    $this->command->info("Datos Agregados correctamente");
    }
}
