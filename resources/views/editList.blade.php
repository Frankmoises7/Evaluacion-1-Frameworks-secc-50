@extends('layouts.master')

@section('content')
    <?php
    //Arrays de información de productos en duro que serán tomadas de la base de datos
    $articulos = [
        [
            'nombre' => 'Lápiz',
            'stock' => 300,
            'sucursal' => 'Arica',
        ],

        [
            'nombre' => 'Cuaderno',
            'stock' => 100,
            'sucursal' => 'Santiago',
        ],

        [
            'nombre' => 'Tijeras',
            'stock' => 200,
            'sucursal' => 'Punta Arenas',
        ],
        [
            'nombre' => 'Cartulina',
            'stock' => 400,
            'sucursal' => 'Santiago',
        ],
        [
            'nombre' => 'Destacadores',
            'stock' => 300,
            'sucursal' => 'Arica',
        ],
        [
            'nombre' => 'Agendas',
            'stock' => 100,
            'sucursal' => 'Punta Arenas',
        ],
        [
            'nombre' => 'Lapiceras',
            'stock' => 300,
            'sucursal' => 'Punta Arenas',
        ],
        [
            'nombre' => 'Glitters',
            'stock' => 50,
            'sucursal' => 'Arica',
        ],
    ];

    ?>
    <div class="container flex-column">
        <h2 class="table-title">Stock de Artículos</h2>
        <table class="table">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">STOCK</th>
                    <th scope="col">SUCURSAL</th>
                    <th scope="col">ACTUALIZAR</th>
                    <th scope="col">DAR DE BAJA</th>
                </tr>
            </thead>
            <?php
        $id = 1;
        foreach ($articulos as $a) {
        ?>
            <tbody>
                <tr class="table-light">
                    <th scope="row"> <?php echo $id; ?> </th>
                    <td><?php echo $a['nombre']; ?></td>
                    <td><?php echo $a['stock']; ?></td>
                    <td><?php echo $a['sucursal']; ?></td>                  
                    <td><button type="button" class="btn btn-success btn-lg">Modificar</button></td>
                    <td><button type="button" class="btn btn-info"><a href="{{url('/delete')}}" class="a-link">ELIMINAR</a></button></td>
                </tr>
            </tbody>

            <?php
            $id = $id + 1;
        }
        ?>
        </table>
        <div>
            <button type="button" class="btn btn-secondary btn-lg"><a href="{{url('/list')}}" class="a-link">Regresar</a></button>        
        </div>

    </div>
@stop
