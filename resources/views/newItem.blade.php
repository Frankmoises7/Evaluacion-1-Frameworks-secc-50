@extends('layouts.master')

@section('content')
<div class="add-element">
            <h2 class="table-title">Agregar Nuevo Artículo</h2>
            <form method="POST" action="{{ url('/guardarIt') }}">
                <table>

                    <td>
                        <div class="input-group mb-3 input-group-lg">
                            <span class="input-group-text">Nombre producto</span>
                            <input type="text" class="form-control" placeholder="Cartulina" id="item" name="articulo">
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
                </table>
                <div>
                    <button type="submit" class="btn btn-primary btn-lg">Agregar</button>
                </div>

            </form>

        </div>
@stop