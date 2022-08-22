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
                    <td>{{$su->region_id}}</td>
                </tr>
            </tbody>

            <?php
            $id = $id + 1;
        }
        ?>
        </table>

        <div class="d-grid gap-2 d-md-block">
        <button type="button" class="btn btn-secondary btn-lg"><a href="listaAsignacionArticulo">Ir a Lista de de asignaciones</a></button>
        
</div>

    </div>
@stop