@extends('layouts.master')
 
@section('content')
<br><br>
<form>
    <h1>Agregar Deportista</h1>

  <div class="form-group row">
    <label name="nombre" class="col-sm-2 col-form-label">Nombre: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Nombre">
    </div>
  </div>

  <div class="form-group row">
    <label name="id" class="col-sm-2 col-form-label">Identificacion: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Identificacion">
    </div>
  </div>

  <div class="form-group row">
    <label name="celular" class="col-sm-2 col-form-label">Celular: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" placeholder="Celular">
    </div>
  </div>

  <div class="form-group row">
    <label name="entreno" class="col-sm-2 col-form-label">Tipo de Entrenamiento</label>
    <div class="col-sm-10">
     <select class="form-select" aria-label="Default select example">
          <option selected>Open this select menu</option>
          <option value="1">Artes Marciales</option>
          <option value="2">Crossfit</option>
          <option value="3">Ambos</option>
     </select>
    </div>
  </div>

  

  <div class="form-group row">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
  </div>

</form>
@stop