@extends('layouts.master')

@section('content')
    <?php
    //Arrays de información de productos en duro que serán tomadas de la base de datos
    $productos = [
        [
            'nombre' => 'Lápiz Mina',
            'stock' => 300,
            'sucursal' => 'Arica',
            'precio' => '100',
        ],

        [
            'nombre' => 'Cuaderno',
            'stock' => 100,
            'sucursal' => 'Santiago',
            'precio' => '400',
        ],

        [
            'nombre' => 'Tijeras',
            'stock' => 200,
            'sucursal' => 'Punta Arenas',
            'precio' => '300',
        ],
        [
            'nombre' => 'Cartulina',
            'stock' => 400,
            'sucursal' => 'Santiago',
            'precio' => '150',
        ],
        [
            'nombre' => 'Destacadores',
            'stock' => 300,
            'sucursal' => 'Arica',
            'precio' => '300',
        ],
        [
            'nombre' => 'Agendas',
            'stock' => 100,
            'sucursal' => 'Punta Arenas',
            'precio' => '800',
        ],
        [
            'nombre' => 'Lapiceras',
            'stock' => 300,
            'sucursal' => 'Punta Arenas',
            'precio' => '200',
        ],
        [
            'nombre' => 'Glitters',
            'stock' => 50,
            'sucursal' => 'Arica',
            'precio' => '500',
        ],
    ];

    ?>
    <div class="container flex-column">
        <h2 class="table-title">Listado de Productos asignados a sucursales</h2>
        <table class="table">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">STOCK</th>
                    <th scope="col">PRECIO EN PESOS</th>
                    <th scope="col">SUCURSAL</th>
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
                    <td><?php echo $p['precio']; ?></td>
                    <td><?php echo $p['sucursal']; ?></td>
                </tr>
            </tbody>

            <?php
            $id = $id + 1;
        }
        ?>
        </table>

        <div class="d-grid gap-2 d-md-block">
        <button type="button" class="btn btn-secondary btn-lg"><a href="asignarArticulo">Asignar un artículo a sucursal</a></button>
        <button type="button" class="btn btn-secondary btn-lg"><a href="editarLista">Actualizar Productos</a></button>
        <button type="button" class="btn btn-secondary btn-lg"><a href="nuevoArticulo">Agregar nuevo artículo</a></button>
        <button type="button" class="btn btn-secondary btn-lg"><a href="nuevaSucursal">Agregar nueva Sucursal</a></button>
        
</div>

    </div>
@stop
