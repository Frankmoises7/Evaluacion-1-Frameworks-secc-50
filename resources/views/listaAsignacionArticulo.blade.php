@extends('layouts.master')

@section('content')



<div class="container flex-column">
    <h2 class="table-title">Listado de Productos asignados a sucursales</h2>
    <table class="table">
        <thead>
            <tr class="table-info">
                <th scope="col">ID</th>
                <th scope="col">CÓDIGO</th>
                <th scope="col">ARTÍCULO</th>
                <th scope="col">SUCURSAL</th>
                <th scope="col">STOCK DE LA SUCURSAL</th>
                <th scope="col">PRECIO</th>
                <th scope="col">IMAGEN</th>
                <th scope="col">EDITAR</th>
            </tr>
        </thead>
        <?php
        $id = 1;
        foreach ($asignaciones as $asi) {
        ?>
            <tbody>
                <tr class="table-light">
                    <td>{{$asi->id}}</td>
                    <td>{{$asi->articulos->codigo}}</td>
                    <td>{{$asi->articulos->nombre}}</td>
                    <td>{{$asi->sucursales->nombre}}</td>
                    <td>{{$asi->stockSucursal}}</td>
                    <td>{{$asi->precio}}</td>
                    <td>
                        @if(Storage::disk('images')->has($asi->articulos->image))
                        <img src="{{ url('miniatura/'. $asi->articulos->image) }}" class="img-thumbnail" alt="..." width="50" height="50">
                        @else
                        <img src="{{$asi->articulos->image}}" class="img-thumbnail" alt="..." width="50" height="50">
                        @endif
                    <td>
                        <form class="d-flex" role="search" method="POST" action="/buscarArt">
                            <button class="btn btn-warning" value=editar type="submit">Editar</button>
                        </form>
                    </td>
                    </td>
                </tr>
            </tbody>

        <?php
            $id = $id + 1;
        }
        ?>
    </table>

</div>
@stop