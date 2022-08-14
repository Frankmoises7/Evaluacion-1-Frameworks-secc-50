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
                        <option value="AL">Arica y Parinacota</option>
                        <option value="AK">Tarapacá</option>
                        <option value="AZ">Antofagasta</option>
                        <option value="AR">Atacama</option>
                        <option value="CA">Coquimbo</option>
                        <option value="CO">Valparaiso</option>
                        <option value="CT">Metropolitana</option>
                        <option value="DE">Libertador General Bernardo O'Higgins</option>
                        <option value="DC">Maule</option>
                        <option value="FL">Biobío</option>
                        <option value="GA">La Araucanía</option>
                        <option value="HI">Los Ríos</option>
                        <option value="ID">Los Lagos</option>
                        <option value="IL">Aysén del General Carlos Ibáñez del Campo</option>
                        <option value="IN">Magallanes y de la Antártica Chilena</option>          
                    </select>                    
                </div>

                </table>
                <div>
                    <button type="submit" class="btn btn-primary btn-lg boton__agregar__newoffice">Agregar</button>
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