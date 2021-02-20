@extends('layouts.master')
 
@section('content')
<br><br>

<h2 align="center">Nueva Rutina</h2>


<form method="POST" action="{{ url('/admin/newRutina') }}" >

{{ csrf_field() }}
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="tipo" class="form-label">Tipo</label> 
        <select class="form-control" id="tipo" name="tipo">
            <option value="Artes Marciales Mixtas">Artes Marciales Mixtas</option>
            <option value="Crossfit">Crossfit</option>        
        </select>
    </div>
    
    <h3 align="center">Primer Ejercicio</h3>

    <div class="mb-3">
        <label for="nombre_ej1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_ej1" name="nombre_ej1" placeholder="Nombre ejercicio">
    </div>

    <div class="mb-3">
        <label for="descrpcion_ej1" class="form-label">Descripción</label>
        <textarea class="form-control" id="descrpcion_ej1" name="descrpcion_ej1" placeholder="Descripción ejercicio 1" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="video_ej1" class="form-label">Video</label>
        <input type="text" class="form-control" id="video_ej1" name="video_ej1" placeholder="Video 1">
    </div>

    <h3 align="center">Segundo Ejercicio</h3>

    <div class="mb-3">
        <label for="nombre_ej2" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_ej2" name="nombre_ej2" placeholder="Nombre ejercicio">
    </div>

    <div class="mb-3">
        <label for="descrpcion_ej2" class="form-label">Descripción</label>
        <textarea class="form-control" id="descrpcion_ej2" name="descrpcion_ej2" placeholder="Descripción ejercicio 2" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="video_ej2" class="form-label">Video</label>
        <input type="text" class="form-control" id="video_ej2" name="video_ej2" placeholder="Video 2">
    </div>

    <h3 align="center">Tercer Ejercicio</h3>

    <div class="mb-3">
        <label for="nombre_ej3" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_ej3" name="nombre_ej3" placeholder="Nombre ejercicio">
    </div>

    <div class="mb-3">
        <label for="descrpcion_ej3" class="form-label">Descripción</label>
        <textarea class="form-control" id="descrpcion_ej3" name="descrpcion_ej3" placeholder="Descripción ejercicio 3" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="video_ej3" class="form-label">Video</label>
        <input type="text" class="form-control" id="video_ej3" name="video_ej3" placeholder="Video 3">
    </div>

    <br>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Registrar Rutina</button>
    </div>
    <br><br>
</form>

@stop