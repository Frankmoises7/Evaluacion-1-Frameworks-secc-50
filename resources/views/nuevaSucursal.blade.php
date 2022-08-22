@extends('layouts.master')

@section('content')
<div class="add-element">
            <h2 class="table-title">Agregar Nueva Sucursal</h2>
            <form method="POST" action="{{ url('/guardarSu') }}">
                <table>
                    <div class="form-group">
                        <label for="full_name_id" class="control-label">Nombre</label>
                        <input type="text" class="form-control" id="sucursal" name="sucursal" placeholder="Sucursal Santiago">
                    </div>
                    <div class="form-group">
                        <label for="street1_id" class="control-label">Dirección</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Calle falsa">
                    </div>

                    <div class="form-group">
                    <td class="input-group mb-3">
                    <span class="input-group-text">Región</span>
                    <select name="region"> id="region" class="form-control">
                    @foreach ($regiones as $r){
                        <option value="{{ $r->id }}">{{ $r->nombre}} </option>
                        @endforeach
                    </select>
                </div>

                </table>
                <div>
                    <button type="submit" class="btnColor boton__agregar__newoffice">Agregar</button>
                </div>

                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </form>
        </div>
@stop
