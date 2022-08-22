@extends('layouts.master')

@section('content')
    <div class="add-element">
        <h2 class="table-title">Asignar Artículo a Sucursal</h2>
        <form method="POST" action="{{ url('/listGuardar') }}">
            <table>
                <td class="input-group mb-3">

                        <span class="input-group-text">Sucursal</span>
                        <select class="form-select" id="sucursal" name="sucursal">
                            <option selected>Selecciona sucursal</option>
                            <option value="Arica">Arica</option>
                            <option value="Santiago">Santiago</option>
                            <option value="Punta Arenas">Punta Arenas</option>
                        </select>

                </td>
                <td class="input-group mb-3">
                        <span class="input-group-text">Artículo</span>
                        <select class="form-select" id="articulo" name="articulo">
                            <option selected>Selecciona artículo</option>
                            <option value="lapiz">Lápiz</option>
                            <option value="goma">Goma</option>
                            <option value="cuaderno">Cuaderno</option>
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
