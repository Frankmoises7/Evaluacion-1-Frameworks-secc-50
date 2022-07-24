@extends('layouts.master')

{{-- <style>
    form{
        background-color:rgb(189, 189, 189);
    }
</style> --}}

@section('content')
<form class="style-form">
    <h3 class="form-title mb-3">Ingresa a tu cuenta</h3>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-light mt-3"><a href="{{url('/list')}}" class="a-link">Entrar</a></button>
</form>
@stop

