@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Editar o Agregar cargo al becario
@endsection


<div  class="row">
<div class="col-md-3">

      {!! Form::open(['route' => ['Becarios.asignar_cargo.update',$becarios], 'method'=>'PUT']) !!}
   <br>
   <br>
   <legend>{{$becarios->cargo}}<br><br></legend>
   
				<h3>{{$becarios->nombre}} <br><br></h3>

   			<br>
	   <div class="form-group">
	   		{!! Form::label('cargo','Agregar cargo') !!}
	   		{!! Form::select('cargo',['Becario'=> 'Becario','Guia'=>'Guia','Embajador'=>'Embajador'],$becarios->cargo,['class'=>'form-control', 'required','placeholder'=>'Seleccione un estado'])!!}	   
	   	 </div>
     <br>
	   <br>
		  
	     <div class="form-group">
	   		{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
	   </div>

	</div>						
</div>







@endsection