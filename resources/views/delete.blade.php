@extends('layouts.master')

@section('content')

<div class="card text-center">
  <div class="card-header">
  </div>
  <div class="card-body">
    <h5 class="card-title">Artículo dado de baja con éxito</h5>
    <button type="button" class="btn btn-secondary btn-lg"><a href="{{url('/list')}}" class="a-link">Regresar</a></button>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>

@stop

