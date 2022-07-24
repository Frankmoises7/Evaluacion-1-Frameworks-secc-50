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
        <h2 class="table-title">Listado de Productos</h2>
        <table class="table">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">STOCK</th>
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
                    <td><?php echo $p['sucursal']; ?></td>
                </tr>
            </tbody>

            <?php
            $id = $id + 1;
        }
        ?>
        </table>
        <div>
            <button type="button" class="btn btn-secondary btn-lg">Modificar</button>
        </div>

        <div class="add-element">
            <h2 class="table-title">Agregar Productos Nuevos</h2>
            <form method="POST" action="{{ url('/listGuardar') }}">
                <table>
                    <td>
                        <div class="input-group mb-3 input-group-lg">
                            <span class="input-group-text">Sucursal</span>
                            <select class="form-select" id="sucursal" name="sucursal">
                                <option selected>Selecciona sucursal</option>
                                <option value="Arica">Arica</option>
                                <option value="Santiago">Santiago</option>
                                <option value="Punta Arenas">Punta Arenas</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="input-group mb-3 input-group-lg">
                            <span class="input-group-text">Articulo</span>
                            <input type="text" class="form-control" placeholder="Agendas" id="producto" name="articulo">
                        </div>

                    </td>
                    <td>
                        <div class="input-group mb-3 input-group-lg">
                            <span class="input-group-text">Cantidad</span>
                            <input type="number" class="form-control" placeholder="30" id="cantidad" name="cantidad">
                        </div>
                    </td>
                </table>
                <div>
                    <button type="submit" class="btn btn-primary btn-lg">Agregar</button>
                </div>

            </form>

        </div>

    </div>
@stop
