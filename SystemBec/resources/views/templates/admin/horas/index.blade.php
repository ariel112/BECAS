@extends('templates.main')




@section('content')




								
@section('subtitle')
Antecedentes penales
@endsection





  
<div align="center">
	<!--boton para el RTN -->
	<a style=" text-decoration: none; text-decoration-line: none;" href="{{route('empleados.indexATCPECREATE',$empleados->id)}}"><font  class="glyphicon glyphicon-folder-open" size="4"> Antecedentes-Penales  </font></a><br> <br> <br> <br>
</div>
						

	

@foreach ($empleados->atc_penales as $atcpenales)
   

		<p style="">
			<img title="El Documento fue actualizado: {{$atcpenales->created_at->diffForHumans()}}" class="img-thumbnail" src="/images/penales/{{$atcpenales->name}}" 
			style="height: 600px; width: 400px; overflow: hidden; float: left; margin: 10px 10px 0 0;" >
		 
		 </p>

		   
 @endforeach
		


@endsection