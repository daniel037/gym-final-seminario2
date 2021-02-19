@extends('layouts.master')
 
@section('content')
<br><br>

<h2 align="center">Editar Deportista</h2><h4 align="center"> {{$estudiantes->nombres}} {{$estudiantes->apellidos}} </h4> 
<form class="row g-3" style="border-style: solid;">
<br><br>
  
  <div class="col-md-6" >
    <label for="inputName" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="inputName" value="{{$estudiantes->nombres}}">
  </div>
  
  <div class="col-md-6">
    <label for="inputApellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="inputApellido" value="{{$estudiantes->apellidos}}">
  </div>

  <div class="col-12">
    <label for="inputAddress" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="inputAddress" value="{{$estudiantes->direccion}}">
  </div>

  <div class="col-md-6" >
    <label for="inputCel" class="form-label">Celular</label>
    <input type="text" class="form-control" id="inputCel" value="{{$estudiantes->celular}}">
  </div>

  <div class="col-md-6">
    <label for="inputCorreo" class="form-label">Correo</label>
    <input type="text" class="form-control" id="inputCorreo" value="{{$estudiantes->correo}}">
  </div>

  
  

  <fieldset class="col-12">
    <legend class="col-form-label col-md-6 ">Disciplina</legend>
    <div class="col-md-6">
      @if( $estudiantes->disciplina == "Artes Marciales Mixtas" )
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Artes Marciales Mixtas" checked>
          <label class="form-check-label" for="gridRadios1">
            Artes Marciales Mixtas
          </label>
        </div>
      @endif
      @if( $estudiantes->disciplina != "Artes Marciales Mixtas" )
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Artes Marciales Mixtas">
          <label class="form-check-label" for="gridRadios1">
            Artes Marciales Mixtas
          </label>
        </div>
      @endif
      @if( $estudiantes->disciplina == "Crossfit" )
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="crossfit" checked>
          <label class="form-check-label" for="gridRadios2">
            Crossfit
          </label>
        </div>
      @endif
      @if( $estudiantes->disciplina != "Crossfit" )
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="crossfit" >
          <label class="form-check-label" for="gridRadios2">
            Crossfit
          </label>
        </div>
      @endif
      @if( $estudiantes->disciplina == "MMA y Crossfit" )
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="ambas" checked>
          <label class="form-check-label" for="gridRadios3">
            MMA y Crossfit
          </label>
        </div>
      @endif
      @if( $estudiantes->disciplina != "MMA y Crossfit" )
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="ambas" >
          <label class="form-check-label" for="gridRadios3">
            MMA y Crossfit
          </label>
        </div>
      @endif
    </div>
    <br>
  </fieldset>

 
  <br><br>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Editar</button>
  </div>
  <br><br>

</form>
<br><br>
@stop
