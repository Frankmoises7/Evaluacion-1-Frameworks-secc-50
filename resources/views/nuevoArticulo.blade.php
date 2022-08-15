@extends('layouts.master')

@section('content')
    <div class="add-element">
        <h2 class="table-title">Agregar Nuevo Artículo</h2>
        <form method="POST" action="{{ url('/guardarIt') }}">
            <table class="i">
                <td class="input-group mb-3">

                    <span class="input-group-text">Código</span>
                    <input type="number" class="form-control" placeholder="1" id="code" name="code">

                </td>

                <td class="input-group mb-3">

                    <span class="input-group-text">Nombre producto</span>
                    <input type="text" class="form-control" placeholder="Cartulina" id="item" name="item">


                </td>
                <td class="input-group mb-3">

                    <span class="input-group-text">Stock</span>
                    <input type="number" class="form-control" placeholder="30" id="stock" name="stock">

                </td>
                <td class="input-group mb-3">

                    <span class="input-group-text">Categoría</span>
                    <select class="form-select" id="category" name="category">
                        <option selected>Selecciona una categoría</option>
                        <option value="Lápices">Lápices</option>
                        <option value="Adhesivos">Adhesivos</option>
                        <option value="Cuadernos y Libretas">Cuadernos y Libretas</option>
                    </select>

                </td>
                <td class="input-group mb-3">
                    <div class="col-lg-12">
                        <span class="col-lg-1 col-lg-offset-2 text-center"><i
                                class="fa fa-pencil-square-o bigicon">Descripción</span>
                        <div class="col-lg-12 textareaStyle">
                            <textarea class="form-control" id="message" name="message"
                                placeholder="Enter your product description here." rows="4"></textarea>
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
