@extends('layouts.master')

@section('content')


    <div class="container flex-column">
        <h2 class="table-title">Listado de sucursales</h2>
        <table class="table">
            <thead>
                <tr class="table-info">
                    <th scope="col">ID</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">DIRECCIÓN</th>
                    <th scope="col">REGIÓN</th>
                    <th scope="col">EDITAR</th>
                    <th scope="col">ELIMINAR</th>
                </tr>
            </thead>
            <?php
        $id = 1;
        foreach ($sucursales as $su) {
        ?>
            <tbody>
                <tr class="table-light">
                    <th scope="row"> <?php echo $id; ?> </th>
                    <td>{{$su->nombre}}</td>
                    <td>{{$su->direccion}}</td>
                    <td>{{$su->regiones->nombre}}</td>
                    <td><button class="btn btn-warning" value=editar> <a href="#">Editar</a></button></td>
                    <td><button class="btn btn-danger" value=eliminar> <a href="/deleteSuc/{{$su->id}}">Eliminar</a></button></td>
                </tr>
            </tbody>

            <?php
            $id = $id + 1;
        }
        ?>
        </table>

    </div>
@stop