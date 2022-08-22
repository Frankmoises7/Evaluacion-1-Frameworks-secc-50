@extends('layouts.master')

@section('content')
    <div class="add-element">
        <h2 class="table-title">Agregar Nuevo Artículo</h2>
        <form method="POST" action="/guardarArticulo">
            <table class="i">
                <td class="input-group mb-3">
                    <span class="input-group-text">Código</span>
                    <input type="number" class="form-control" placeholder="1" id="codigo" name="codigo">
                </td>
                <td class="input-group mb-3">
                    <span class="input-group-text">Nombre producto</span>
                    <input type="text" class="form-control" placeholder="Cartulina" id="nombre" name="nombre">
                </td>
                <td class="input-group mb-3">
                    <span class="input-group-text">Stock</span>
                    <input type="number" class="form-control" placeholder="30" id="stock" name="stock">
                </td>

                <td class="input-group mb-3">
                    <span class="input-group-text">Categoría</span>
                    <select name="categoria"> id="categoria" class="form-control">
                    @foreach ($categorias as $c){
                        <option value="{{ $c->id }}">{{ $c->nombre}} </option>
                        @endforeach
                    </select>

                <td class="input-group mb-3">                   
                    <div class="col-lg-12">
                        <span class="col-lg-1 col-lg-offset-2 text-center"><i
                                class="fa fa-pencil-square-o bigicon">Descripción</span>
                        <div class="col-lg-12 textareaStyle">
                            <textarea class="form-control" id="descripcion" name="descripcion" placeholder="Enter your product description here."
                                rows="4"></textarea>
                        </div>
                    </div>
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
