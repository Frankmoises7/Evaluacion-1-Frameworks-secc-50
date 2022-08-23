@extends('layouts.master')

@section('content')



    <div class="container flex-column">
        <h2 class="table-title">Listado de Productos</h2>
        <table class="table">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">CODIGO</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">STOCK</th>
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">DESCRIPCIÓN</th>
                </tr>
            </thead>
            <?php
        $id = 1;
        foreach ($articulos as $a) {
        ?>
            <tbody>
                <tr class="table-light">
                    <td>{{$a->id}}</td>
                    <td>{{$a->codigo}}</td>
                    <td>{{$a->nombre}}</td>
                    <td>{{$a->stock}}</td>                  
                    <td>{{$a->categorias->nombre}}</td>
                    <td>{{$a->descripcion}}</td>
                </tr>
            </tbody>

            <?php
            $id = $id + 1;
        }
        ?>
        </table>

        <form method="POST" action="{{ url('/buscarArt') }}">
  <div class="mb-3">
    <label for="busqueda" class="form-label">Busqueda productos</label>
    <input type="text" name="busqueda"> <br>
    <imput type="submit" name="enviar" value="buscar">
</form>

        <div class="d-grid gap-2 d-md-block">
        <button type="button" class="btn btn-secondary btn-lg"><a href="asignarArticulo">Asignar un artículo a sucursal</a></button>
        <button type="button" class="btn btn-secondary btn-lg"><a href="editarLista">Actualizar Productos</a></button>
        <button type="button" class="btn btn-secondary btn-lg"><a href="nuevoArticulo">Agregar nuevo artículo</a></button>
        <button type="button" class="btn btn-secondary btn-lg"><a href="nuevaSucursal">Agregar nueva Sucursal</a></button>
        
</div>

    </div>
@stop
