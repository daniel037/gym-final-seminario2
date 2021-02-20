@extends('layouts.master')
 
@section('content')
<br><br>

<h2 align="center">Editar Rutina</h2>


<form method="POST" action="{{ url('/admin/editRutina/'.$rutinas->id) }}" >
    {{ method_field('PUT') }}
    {{ csrf_field() }}

    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre"  value="{{$rutinas->nombre}}" >
    </div>

    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{$rutinas->descripcion}}</textarea>
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
        <input type="text" class="form-control" id="nombre_ej1" name="nombre_ej1" value="{{$rutinas->nombre_ej1}}">
    </div>

    <div class="mb-3">
        <label for="descrpcion_ej1" class="form-label">Descripción</label>
        <textarea class="form-control" id="descrpcion_ej1" name="descrpcion_ej1"  rows="3">{{$rutinas->descrpcion_ej1}}</textarea>
    </div>

    <div class="mb-3">
        <label for="video_ej1" class="form-label">Video</label>
        <input type="text" class="form-control" id="video_ej1" name="video_ej1" value="{{$rutinas->video_ej1}}">
    </div>

    <h3 align="center">Segundo Ejercicio</h3>

    <div class="mb-3">
        <label for="nombre_ej2" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_ej2" name="nombre_ej2" value="{{$rutinas->nombre_ej2}}">
    </div>

    <div class="mb-3">
        <label for="descrpcion_ej2" class="form-label">Descripción</label>
        <textarea class="form-control" id="descrpcion_ej2" name="descrpcion_ej2" value="{{$rutinas->descrpcion_ej2}}" rows="3">{{$rutinas->descrpcion_ej2}}</textarea>
    </div>

    <div class="mb-3">
        <label for="video_ej2" class="form-label">Video</label>
        <input type="text" class="form-control" id="video_ej2" name="video_ej2" value="{{$rutinas->video_ej2}}">
    </div>

    <h3 align="center">Tercer Ejercicio</h3>

    <div class="mb-3">
        <label for="nombre_ej3" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre_ej3" name="nombre_ej3" value="{{$rutinas->nombre_ej3}}">
    </div>

    <div class="mb-3">
        <label for="descrpcion_ej3" class="form-label">Descripción</label>
        <textarea class="form-control" id="descrpcion_ej3" name="descrpcion_ej3"  rows="3">{{$rutinas->descrpcion_ej3}}</textarea>
    </div>

    <div class="mb-3">
        <label for="video_ej3" class="form-label">Video</label>
        <input type="text" class="form-control" id="video_ej3" name="video_ej3" value="{{$rutinas->video_ej3}}">
    </div>

    <br>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Actualizar Rutina</button>
    </div>
    <br><br>
</form>

@stop