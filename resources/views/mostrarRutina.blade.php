@extends('layouts.master')
	 
	@section('content')

	<br>
	<div>       
		<h1> Rutina: {{$rutinas->id}}</h1>
		<h2>{{$rutinas->nombre}}</h2>
		<p>{{$rutinas->descripcion}}</p>

		<h3>{{$rutinas->nombre_ej1}}</h3>
		<p>{{$rutinas->descrpcion_ej1}}</p>
		<iframe
			width="503" height="344" 
			src="{{$rutinas->video_ej1}}" 
			frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
			allowfullscreen
		>
		</iframe>

		<h3>{{$rutinas->nombre_ej2}}</h3>
		<p>{{$rutinas->descrpcion_ej2}}</p>
		<iframe
			width="503" height="344" 
			src="{{$rutinas->video_ej2}}" 
			frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
			allowfullscreen
		>
		</iframe>

		<h3>{{$rutinas->nombre_ej3}}</h3>
		<p>{{$rutinas->descrpcion_ej3}}</p>
		<iframe
			width="503" height="344" 
			src="{{$rutinas->video_ej3}}" 
			frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
			allowfullscreen
		>
		</iframe>
 	  
     
 </div> 
</div>
<br><br>

	@stop

	