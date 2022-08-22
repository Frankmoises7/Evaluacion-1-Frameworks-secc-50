@extends('layouts.master')

@section('content')
    <div class="add-element">
        <h2 class="table-title">Asignar Artículo a Sucursal</h2>
        <form method="POST" action="{{ url('/guardarAsignacion') }}">
            <table>
                <td class="input-group mb-3">

                    <span class="input-group-text">Sucursal</span>
                    <select name="sucursalA"> id="sucursalA" class="form-control">
                    @foreach ($sucursales as $su){
                        <option value="{{ $su->id }}">{{ $su->nombre}} </option>
                        @endforeach
                    </select>

                </td>
                <td class="input-group mb-3">
                <span class="input-group-text">Artículo</span>
                    <select name="articuloA"> id="articuloA" class="form-control">
                    @foreach ($articulos as $ar){
                        <option value="{{ $ar->id }}">{{ $ar->nombre}} </option>
                        @endforeach
                    </select>
                </td>
                <td class="input-group mb-3">
                        <span class="input-group-text">Cantidad</span>
                        <input type="number" class="form-control" placeholder="30" id="cantidad" name="cantidad">
                </td>
                <td class="input-group mb-3">
                        <span class="input-group-text">Precio Unidad</span>
                        <input type="number" class="form-control" placeholder="30" id="preciounidad" name="preciounidad">
                </td>
            </table>
            <div>
                <button type="submit" class="btnColor">Agregar</button>
            </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

        </form>

    </div>
@stop
