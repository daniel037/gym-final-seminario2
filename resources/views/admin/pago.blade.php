@extends('layouts.master')
 
@section('content')
<br><br>

<h2 align="center">Actualizar Pago</h2>
<h4 align="center"> {{$estudiantes->nombres}} {{$estudiantes->apellidos}} </h4> 

<form method="POST" action="{{ url('/admin/pago/'.$estudiantes->id) }}" class="row g-3" style="border-style: solid;">
{{ method_field('PUT') }}
{{ csrf_field() }}
<br><br>

<div class="col-md-6" >
    <label for="valor" class="form-label">Valor cancelado</label>
    <input type="text" class="form-control" id="valor" name="valor">
  </div>

  <div class="col-md-6">
    <label for="fecha" class="form-label">Fecha Limite</label>
    <input type="date" class="form-control" id="fecha" name="fecha">
  </div>

  <br><br><br><br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </div>
  <br><br>

</form>
<br><br>

@stop