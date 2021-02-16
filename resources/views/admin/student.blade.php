@extends('layouts.master')
 
@section('content')
    
    <div class="row">       
 
        <div class="col-sm-4">           
            <img src="{{$movies->poster}}" style="height:450px"/>    
        </div>      
        <div class="col-sm-8">           
           <h1> {{$movies->title}}</h1>   
           <b>Año: </b><label> {{ $movies->year}} </label> <br>
           <b>Director: </b><label> {{$movies->director}} </label><br>   
           <b>Resumen:</b><label> {{$movies->synopsis}} </label>    
           <b>Estado: </b>
           <?php
            if($movies->rented)
            {
                echo "Película actualmente alquilada <br><br>";
                echo "<button type='button' class='btn btn-danger'>Devolver Pelicula </button>";
                
            }
            else
            {
                echo "Película disponible <br><br>";
                echo "<button type='button' class='btn btn-primary'>Alquilar Pelicula </button>";
            }
            ?>  
            <a href="{{url('/catalog/edit')}}/{{$movies->id}}" class="btn btn-warning"><i class="fa fa-pencil-alt"></i> Editar pelicula</a>
            <a href="{{url('/catalog')}}" class="btn btn-default"><i class="fa fa-angle-left"></i> Volver al listado</a>
            
        </div> 
    </div>
    
@stop