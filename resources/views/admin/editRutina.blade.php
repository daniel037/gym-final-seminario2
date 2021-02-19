@extends('layouts.master')
 
@section('content')
<br><br>

<h2 align="center">Editar Rutina</h2>


<form >
    <div class="mb-3">
        <label for="nombreRutina" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombreRutina" placeholder="Nombre">
    </div>

    <div class="mb-3">
        <label for="descripcionRutina" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcionRutina" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="tipoRutina" class="form-label">Tipo</label> 
        <select class="form-control" id="tipoRutina">
            <option value="Artes Marciales Mixtas">Artes Marciales Mixtas</option>
            <option value="Crossfit">Crossfit</option>        
        </select>
    </div>
    
    <h3 align="center">Primer Ejercicio</h3>

    <div class="mb-3">
        <label for="nombreEjercicio1" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombreEjercicio1" placeholder="Nombre ejercicio">
    </div>

    <div class="mb-3">
        <label for="descripcionEjercicio1" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcionEjercicio1" placeholder="Descripción ejercicio 1" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="video1" class="form-label">Video</label>
        <input type="text" class="form-control" id="video1" placeholder="Video 1">
    </div>

    <h3 align="center">Segundo Ejercicio</h3>

    <div class="mb-3">
        <label for="nombreEjercicio2" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombreEjercicio2" placeholder="Nombre ejercicio">
    </div>

    <div class="mb-3">
        <label for="descripcionEjercicio2" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcionEjercicio2" placeholder="Descripción ejercicio 2" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="video2" class="form-label">Video</label>
        <input type="text" class="form-control" id="video2" placeholder="Video 2">
    </div>

    <h3 align="center">Tercer Ejercicio</h3>

    <div class="mb-3">
        <label for="nombreEjercicio3" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombreEjercicio3" placeholder="Nombre ejercicio">
    </div>

    <div class="mb-3">
        <label for="descripcionEjercicio3" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcionEjercicio3" placeholder="Descripción ejercicio 3" rows="3"></textarea>
    </div>

    <div class="mb-3">
        <label for="video3" class="form-label">Video</label>
        <input type="text" class="form-control" id="video3" placeholder="Video 3">
    </div>

    <br>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Registrar Rutina</button>
    </div>
    <br><br>
</form>
<br><br><br><br><br><br><br><br>


<iframe src="https://www.youtube.com/embed/2TSQTHHYzvc"></iframe>
@stop