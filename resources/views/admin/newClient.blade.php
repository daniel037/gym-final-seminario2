@extends('layouts.master')
 
@section('content')
<br><br>

<h2 align="center">Agregar Deportista</h2>

<form method="POST" action="{{ url('/admin/newClient') }}" class="row g-3" style="border-style: solid;">
<br><br>
  {{ csrf_field() }}
  <div class="col-md-6" >
    <label for="nombres" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="nombres" name="nombres">
  </div>

  <div class="col-md-6">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos">
  </div>

  <div class="col-12">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Dirección">
  </div>

  <div class="col-md-6" >
    <label for="celular" class="form-label">Celular</label>
    <input type="text" class="form-control" id="celular" name="celular">
  </div>

  <div class="col-md-6">
    <label for="correo" class="form-label">Correo</label>
    <input type="text" class="form-control" id="correo" name="correo">
  </div>

  <div class="col-md-12">
    <label for="fotografia" class="form-label">Fotografia</label>
    <input type="text" class="form-control" id="fotografia" name="fotografia">
  </div>


  <fieldset class="col-12">

    <legend class="col-form-label col-md-6 ">Disciplina</legend>

    <div class="col-md-6">
      <div class="form-check">

        <input class="form-check-input" type="radio" name="disciplina" id="gridRadios1" value="Artes Marciales Mexitas" checked>
        <label class="form-check-label" for="gridRadios1">
          Artes Marciales
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="disciplina" id="gridRadios2" value="Crossfit">
        <label class="form-check-label" for="gridRadios2">
          Crossfit
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="disciplina" id="gridRadios3" value="MMA - Crossfit" >
        <label class="form-check-label" for="gridRadios3">
          MMA y Crossfit
        </label>
      </div>
    </div>
    <br>
  </fieldset>

 
  <br><br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Registrar</button>
  </div>
  <br><br>

</form>
<br><br>



@stop