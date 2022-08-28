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
                    <th scope="col">CATEGORIA</th>
                    <th scope="col">DESCRIPCIÓN</th>
                    <th scope="col">IMAGEN REFERENCIA</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">ELIMINAR</th>
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
                    <td>{{$a->categorias->nombre}}</td>
                    <td>{{$a->descripcion}}</td>
                    <td>
                    @if(Storage::disk('images')->has($a->image))
                    <img src="{{ url('miniatura/'. $a->image) }}" class="img-thumbnail" alt="..." width="50" height="50">
                    @else
                    <img src="{{$a->image}}" class="img-thumbnail" alt="..." width="50" height="50">
                    @endif
                    <td><button class="btn btn-warning" value=editar> <a href="#">Editar</a></button></td>
                    <td><button class="btn btn-danger" value=editar> <a href="/delete/{{$a->id}}">Eliminar</a></button></td>
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
