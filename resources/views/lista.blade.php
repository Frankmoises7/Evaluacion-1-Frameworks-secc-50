@extends('layouts.master')

@section('content')
 

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
                    <td>{{$p->articulo_id}}</td>
                    <td>{{$p->stockSucursal}}</td>
                    <td>{{$p->precio}}</td>
                    <td>{{$p->sucursal_id}}</td>
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
