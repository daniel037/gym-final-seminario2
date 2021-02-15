@extends('layouts.master')
 
@section('content')
<br><br>

<h2 align="center">Agregar Deportista</h2>
<form class="row g-3" style="border-style: solid;">
<br><br>
  
  <div class="col-md-6" >
    <label for="inputName" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="inputName">
  </div>

  <div class="col-md-6">
    <label for="inputApellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="inputApellido">
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Dirección">
  </div>

  <div class="col-md-6" >
    <label for="inputCel" class="form-label">Celular</label>
    <input type="text" class="form-control" id="inputCel">
  </div>

  <div class="col-md-6">
    <label for="inputCorreo" class="form-label">Correo</label>
    <input type="text" class="form-control" id="inputCorreo">
  </div>

  <div class="col-md-12">
    <label for="inputfoto" class="form-label">Fotografia</label>
    <input type="file" class="form-control" id="inputFoto">
  </div>


  <fieldset class="col-12">

    <legend class="col-form-label col-md-6 ">Disciplina</legend>

    <div class="col-md-6">
      <div class="form-check">

        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="mma" checked>
        <label class="form-check-label" for="gridRadios1">
          Artes Marciales
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="crossfit">
        <label class="form-check-label" for="gridRadios2">
          Crossfit
        </label>
      </div>
      <div class="form-check disabled">
        <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="ambas" >
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