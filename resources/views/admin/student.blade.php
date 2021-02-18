@extends('layouts.master')
 
@section('content')
<br>
<div class="row">       
 
 <div class="col-sm-4">           
     <img src="{{$estudiantes->fotografia}}" height="300px"  width ="250px" />    
 </div>      
 <div class="col-sm-8">           
    <h1> {{$estudiantes->nombres}} {{$estudiantes->apellidos}} </h1>   
    <b>Dirección </b><label> {{ $estudiantes->direccion}} </label> <br>
    <b>Email: </b><label> {{$estudiantes->correo}} </label><br>   
    <b>Celular:</b><label> {{$estudiantes->celular}} </label>    
    <h3>{{$estudiantes->disciplina}}</h3>
    
    <a href="..." class="btn btn-danger"> Eliminar Estudiante </a>
    <a href="{{url('/admin/editClient')}}/{{$estudiantes->id}}" class="btn btn-warning"> Editar Estudiante </a>
    <a href="{{url('/admin/studentList')}}" class="btn btn-primary"> Volver al listado</a>
    <br><br>

    <?php
        if($estudiantes->estado)
        {
            echo "<h3>Mensualidad  OK</h3>";
            echo "<button type='button' class='btn btn-success'>Actualizar Pago </button>";  
        }
        else
        {
            
            echo "<h3>Mensualidad Vencido</h3>";
            echo "<button type='button' class='btn btn-danger'>Actualizar Pago </button>"; 
        }
    ?> 
            
     
 </div> 
</div>
<br><br>
@stop