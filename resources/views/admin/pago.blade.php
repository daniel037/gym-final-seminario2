@extends('layouts.master')
 
@section('content')
<br><br>

<h2 align="center">Actualizar Pago</h2>
<h4 align="center"> {{$estudiantes->nombres}} {{$estudiantes->apellidos}} </h4> 
<form class="row g-3" style="border-style: solid;">
<br><br>

  <div class="col-md-6" >
    <label for="inputValor" class="form-label">Valor</label>
    <input type="text" class="form-control" id="inputValor">
  </div>

  <div class="col-md-6">
    <label for="inputFecha" class="form-label">Fecha Limite</label>
    <input type="date" class="form-control" id="inputFecha">
  </div>

  <br><br><br><br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
  <br><br>

</form>
<br><br>

@stop