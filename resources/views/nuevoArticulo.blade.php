@extends('layouts.master')

@section('content')
<div class="add-element">
            <h2 class="table-title">Agregar Nuevo Artículo</h2>
            <form method="POST" action="{{ url('/guardarIt') }}">
                <table>

                     <td>
                        <div class="input-group mb-3 input-group-lg">
                            <span class="input-group-text">Código</span>
                            <input type="number" class="form-control" placeholder="1" id="code" name="code">
                        </div>
                    </td>

                    <td>
                        <div class="input-group mb-3 input-group-lg">
                            <span class="input-group-text">Nombre producto</span>
                            <input type="text" class="form-control" placeholder="Cartulina" id="item" name="item">
                        </div>

                    </td>
                    <td>
                        <div class="input-group mb-3 input-group-lg">
                            <span class="input-group-text">Stock</span>
                            <input type="number" class="form-control" placeholder="30" id="stock" name="stock">
                        </div>
                    </td>
                    <td>
                        <div class="input-group mb-3 input-group-lg">
                            <span class="input-group-text">Categoría</span>
                            <select class="form-select" id="category" name="category">
                                <option selected>Selecciona una categoría</option>
                                <option value="Lápices">Lápices</option>
                                <option value="Adhesivos">Adhesivos</option>
                                <option value="Cuadernos y Libretas">Cuadernos y Libretas</option>
                            </select>
                        </div>
                    </td>
                    <td>
                    <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon">Descripción</span>
                            <div class="col-md-8">
                                <textarea class="form-control" id="message" name="message" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>
                    </td>
                </table>
                <div>
                    <button type="submit" class="btn btn-primary btn-lg">Agregar</button>
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