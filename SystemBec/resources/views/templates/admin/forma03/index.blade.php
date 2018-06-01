@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Identidad
@endsection

<style type="text/css"> 
#portapdf { 
    width: 1100px; 
    height: 800px; 
    border: 1px solid #484848; 
    margin: 0 auto; 
} 
</style> 

<div align="center">
	<!--boton para la forma03-->
	<a id="espaciados" style=" text-decoration: none; text-decoration-line: none;" href="{{route('Becarios.index-forma03-CREATE',$becarios->id)}}"><font  class="glyphicon glyphicon-folder-open" size="4"> Actualizar Identidad </font></a>
</div>
						

				
	<div >			

@foreach ($becarios->formas03 as $forma03)
   
        <br><br>              
		<div id="portapdf">

		 	<object data="/images/forma03/{{$forma03->name}}" type="application/pdf" width="100%" height="100%">
		 	</object>
		</div>

		   
 @endforeach

</div>


@endsection