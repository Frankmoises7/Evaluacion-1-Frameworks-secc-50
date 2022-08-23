@extends('layouts.master')

@section('content')



    <div class="container flex-column">
        <h2 class="table-title">Listado de Productos asignados a sucursales</h2>
        <table class="table">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">ARTÍCULO</th>
                    <th scope="col">SUCURSAL</th>
                    <th scope="col">STOCK DE LA SUCURSAL</th>
                    <th scope="col">PRECIO</th>
                </tr>
            </thead>
            <?php
        $id = 1;
        foreach ($asignaciones as $asi) {
        ?>
            <tbody>
                <tr class="table-light">
                    <td>{{$asi->id}}</td>
                    <td>{{$asi->articulos->nombre}}</td>
                    <td>{{$asi->sucursales->nombre}}</td>
                    <td>{{$asi->stockSucursal}}</td>                  
                    <td>{{$asi->precio}}</td>
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
