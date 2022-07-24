@extends('layouts.master')

@section('content')
    <?php
    //Arrays de información de productos en duro que serán tomadas de la base de datos
    $productos = [
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
        <h2 class="table-title">Stock de Productos</h2>
        <table class="table">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">STOCK</th>
                    <th scope="col">SUCURSAL</th>
                    <th scope="col">MENOS</th>
                    <th scope="col">MÁS</th>
                </tr>
            </thead>
            <?php
        $id = 1;
        foreach ($productos as $p) {
        ?>
            <tbody>
                <tr class="table-light">
                    <th scope="row"> <?php echo $id; ?> </th>
                    <td><?php echo $p['nombre']; ?></td>
                    <td><?php echo $p['stock']; ?></td>
                    <td><?php echo $p['sucursal']; ?></td>
                    <td><button type="button" class="btn btn-danger">-</button></td>
                    <td><button type="button" class="btn btn-primary">+</button></td>
                </tr>
            </tbody>

            <?php
            $id = $id + 1;
        }
        ?>
        </table>
        <div>
            <button type="button" class="btn btn-secondary btn-lg"><a href="{{url('/list')}}" class="a-link">Regresar</a></button>
            <button type="button" class="btn btn-success btn-lg">Actualizar</button>
        </div>

    </div>
@stop
