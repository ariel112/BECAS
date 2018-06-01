@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Horas de Actividades o Talleres
@endsection




<div  class="row">
<div class="col-md-6">

       {!! Form::open(['route' => ['actividadesHoras.store',$becarios->becario_id], 'method'=>'POST']) !!}
   <br>
   <br>
   
				<h3>{{$becarios->nombre}} <br><br></h3>

   			<br>
	   <div class="form-group">
	   		{!! Form::label('actividad','Actividades') !!}
	   		<select name="actividades_id" class="form-control">
	   			@foreach($actividadesCC as $actividad)
	   			<option value='{{$actividad->id}}'>{{$actividad->nombre}} -- {{$actividad->lugar}}</option>
	   			@endforeach
	   			 <input style="visibility: hidden;" type="text" name="becario_id" value="{{$becarios->id}} ">
	   		
	   		</select>

	   	 </div>
     <br>
	   <br>
		  
	     <div class="form-group">
	   		{!! Form::submit('Asignar actividad',['class'=>'btn btn-default', 'id'=>'btnInfo']) !!}
	   </div>

	</div>						
</div>



















@endsection