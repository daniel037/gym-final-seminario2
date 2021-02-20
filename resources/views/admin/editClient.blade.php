  @extends('layouts.master')
 
@section('content')
<br><br>

<h2 align="center">Editar Deportista</h2><h4 align="center"> {{$estudiantes->nombres}} {{$estudiantes->apellidos}} </h4> 

<form method="POST" action="{{ url('/admin/editClient/'.$estudiantes->id) }}" class="row g-3" style="border-style: solid;">
  {{ method_field('PUT') }}
  {{ csrf_field() }}
<br><br>
  
  <div class="col-md-6" >
    <label for="nombres" class="form-label">Nombres</label>
    <input type="text" class="form-control" id="nombres" name="nombres" value="{{$estudiantes->nombres}}">
  </div>
  
  <div class="col-md-6">
    <label for="apellidos" class="form-label">Apellidos</label>
    <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{$estudiantes->apellidos}}">
  </div>

  <div class="col-12">
    <label for="direccion" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="direccion" name="direccion" value="{{$estudiantes->direccion}}">
  </div>

  <div class="col-md-6" >
    <label for="celular" class="form-label">Celular</label>
    <input type="text" class="form-control" id="celular" name="celular" value="{{$estudiantes->celular}}">
  </div>

  <div class="col-md-6">
    <label for="correo" class="form-label">Correo</label>
    <input type="text" class="form-control" id="correo" name="correo" value="{{$estudiantes->correo}}">
  </div>

  <fieldset class="col-12">
    <legend class="col-form-label col-md-6 ">Disciplina</legend>
    <div class="col-md-6">
      @if( $estudiantes->disciplina == "Artes Marciales Mixtas" )
        <div class="form-check">
          <input class="form-check-input" type="radio" name="disciplina" id="gridRadios1" value="Artes Marciales Mixtas" checked>
          <label class="form-check-label" for="gridRadios1">
            Artes Marciales Mixtas
          </label>
        </div>
      @endif
      @if( $estudiantes->disciplina != "Artes Marciales Mixtas" )
        <div class="form-check">
          <input class="form-check-input" type="radio" name="disciplina" id="gridRadios1" value="Artes Marciales Mixtas">
          <label class="form-check-label" for="gridRadios1">
            Artes Marciales Mixtas
          </label>
        </div>
      @endif
      @if( $estudiantes->disciplina == "Crossfit" )
        <div class="form-check">
          <input class="form-check-input" type="radio" name="disciplina" id="gridRadios2" value="crossfit" checked>
          <label class="form-check-label" for="gridRadios2">
            Crossfit
          </label>
        </div>
      @endif
      @if( $estudiantes->disciplina != "Crossfit" )
        <div class="form-check">
          <input class="form-check-input" type="radio" name="disciplina" id="gridRadios2" value="crossfit" >
          <label class="form-check-label" for="gridRadios2">
            Crossfit
          </label>
        </div>
      @endif
      @if( $estudiantes->disciplina == "MMA - Crossfit" )
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="disciplina" id="gridRadios3" value="MMA - Crossfit" checked>
          <label class="form-check-label" for="gridRadios3">
            MMA y Crossfit
          </label>
        </div>
      @endif
      @if( $estudiantes->disciplina != "MMA - Crossfit" )
        <div class="form-check disabled">
          <input class="form-check-input" type="radio" name="disciplina" id="gridRadios3" value="MMA - Crossfit" >
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
