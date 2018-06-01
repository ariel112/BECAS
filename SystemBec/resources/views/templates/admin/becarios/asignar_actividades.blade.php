@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Asignar Proyecto a becarios
@endsection


<div  class="row">
<div class="col-md-6">

      {!! Form::open(['route' => ['Becarios.asignar.update',$becarios], 'method'=>'PUT']) !!}
   <br>
   <br>
   <legend>{{$becarios->cargo}}<br><br></legend>
  

				<h3>{{$becarios->name}} <br><br></h3>

   			<br>
	   <div class="form-group">
	   		{!! Form::label('proyecto','Proyecto') !!}
	   		<select name="actividad_id" class="form-control">
	   			@foreach($proyectos as $proyecto)
	   			<option value='{{$actividad->id}}'>{{$actividad->name}} -- {{$actividad->direccion}}</option>
	   			@endforeach
	   		</select>

	   	 </div>
     <br>
	   <br>
		  
	     <div class="form-group">
	   		{!! Form::submit('Guardar',['class'=>'btn btn-info', 'id'=>'btnInfo']) !!}
	   </div>

	</div>						
</div>
         <input type="button" name="" id="btnInfo1" onclick="true">




 <script  src="{{asset('plugins/js-especiales/mensajes.js')}}"> </script>


@endsection



 	