@extends('layouts.master')

@section('content')
<div class="add-element">
            <h2 class="table-title">Agregar Nueva Sucursal</h2>
            <form method="POST" action="{{ url('/guardarOf') }}">
                <table>
                    <div class="form-group">
                        <label for="full_name_id" class="control-label">Nombre</label>
                        <input type="text" class="form-control" id="nameOffice" name="nameOffice" placeholder="Sucursal Santiago">
                    </div>
                    <div class="form-group">
                        <label for="street1_id" class="control-label">Dirección</label>
                    <input type="text" class="form-control" id="address" name="address" placeholder="Calle falsa">
                    </div>

                    <div class="form-group">
                    <label for="region" class="control-label">Región</label>
                    <select class="form-control" id="region">
                        <option value="15">Arica y Parinacota</option>
                        <option value="1">Tarapacá</option>
                        <option value="2">Antofagasta</option>
                        <option value="3">Atacama</option>
                        <option value="4">Coquimbo</option>
                        <option value="5">Valparaiso</option>
                        <option value="13">Metropolitana</option>
                        <option value="6">Libertador General Bernardo O'Higgins</option>
                        <option value="7">Maule</option>
                        <option value="8">Biobío</option>
                        <option value="9">La Araucanía</option>
                        <option value="14">Los Ríos</option>
                        <option value="10">Los Lagos</option>
                        <option value="11">Aysén del General Carlos Ibáñez del Campo</option>
                        <option value="12">Magallanes y de la Antártica Chilena</option>
                        <option value="16">Ñuble</option>
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
