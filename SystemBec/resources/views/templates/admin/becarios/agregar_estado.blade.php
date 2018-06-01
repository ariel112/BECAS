@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Editar o Agregar estado al empleado
@endsection


<div  class="row">
<div class="col-md-5">

      {!! Form::open(['route' => ['Becarios.asignar_estado.update',$becarios], 'method'=>'PUT']) !!}
   <br>
   <br>
   
  
 
				<h3>{{$becarios->name}} <br><br></h3>

   			<br>
	   <div class="form-group">
	   		{!! Form::label('estado','Agregar estado') !!}
            {!! Form::select('estado',[
	   		'Activo'=> 'Activo','Inactivo'=>'Inactivo','Practica'=>'Practica'], $becarios->estado,['class'=>'form-control','required' , 'placeholder'=>'Seleccione un estado..'])!!}
            {!! Form::label('descripcion','Descripcion') !!}
            {!! Form::textarea('descripcion',$becarios->descripcion,['class'=>'form-control','required'])!!}

           



	   	 </div>
     <br>
	   <br>
		  
	     <div class="form-group">
	   		{!! Form::submit('Actualizar',['class'=>'btn btn-primary']) !!}
	   </div>

	</div>						
</div>







@endsection