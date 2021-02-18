@extends('layouts.master')
	 
	@section('content')

	<h1 align="center">Estudiantes.</h1>
	    
	<div class="row">        
		@foreach( $estudiantes as $student)
	    	<div class="col-xs-6 col-sm-4 col-md-3 text-center">       
				<h4 style="min-height:45px;margin:5px 0 10px 0">                   
	               {{$student->nombres}}	        
	           	</h4>   
	       		<a href="{{url('/admin/student/' . $student->id)}}">               
	          	<img src="{{$student->fotografia}}" style="height:200px"/>              
	         	</a>    
				 <h4 style="min-height:45px;margin:5px 0 10px 0">                   
	               {{$student->disciplina}}	        
	           	</h4>     
	       </div>       
	   	@endforeach
	</div>
	@stop

	