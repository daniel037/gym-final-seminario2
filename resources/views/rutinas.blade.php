@extends('layouts.master')
	 
	@section('content')

	<h1 align="center">Rutinas.</h1>

	<div class="row">        
		@foreach( $rutinas as $rutina)

	    	<div class="col-xs-6 col-sm-4 col-md-3 text-center">       
				<h4 style="min-height:45px;margin:5px 0 10px 0">                   
	               {{$rutina->tipo}}	        
	           	</h3>   
				   <h4 style="min-height:45px;margin:5px 0 10px 0">                   
	               {{$rutina->nombre}}	        
	           	</h3> 
	       		<a href="{{url('/showRutina/' . $rutina->id)}}">  
				   @if($rutina->tipo == "Artes Marciales Mixtas")
						<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTCdnfXiPQilZRTlzMK3uvl_OSC4ZllzUbU4A&usqp=CAU" style="height:200px"/>    
				   @endif   

				   @if($rutina->tipo == "Crossfit")
						<img src="https://st2.depositphotos.com/2250467/10649/v/600/depositphotos_106497016-stock-illustration-retro-styled-crossfit-emblem.jpg" style="height:200px"/>    
				   @endif           
	          		          
	         	</a>    
				<p style="min-height:45px;margin:5px 0 10px 0">                   
	               {{$rutina->descripcion}}	        
	           	</p>     
	       </div>       
	   	@endforeach
		
	</div>
	<br><br>
	@if( Auth::check() )
		<a href="{{url('/admin/newRutina')}}" class="btn btn-primary">Nueva Rutina</a>
	@endif
	<br><br>
	
	@stop

	