@extends('layouts.master')

@section('content')
<form class="style-form">
    <h3 class="form-title mb-3">Ingresa a tu cuenta</h3>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Correo electrónico</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-light mt-3"><a href="listaAsignacionArticulo">Entrar</a></button>
</form>
@stop

