@extends('templates.main')


@section('content')



<!-- Header -->
								

								
@section('subtitle')
Editar Actividad 
@endsection


<div  class="row">
<div class="col-md-5">
<br>


      {!! Form::open(['route' => ['Actividades.update',$actividades], 'method'=>'PUT' ,'files'=>true, 'id'=>'formEmpty','data-smk-icon'=>'glyphicon-remove-sign']) !!}


	


	     	 <br>
   <br>
	   <div class="form-group" >
	   
	   		{!! Form::label('name','Nombre de la actividad') !!}
	   		{!! Form::text('nombre',$actividades->nombre,['class'=>'form-control','required','placeholder'=>'Nombre del proyecto','max'=>'3'])!!}
	   	
	   </div>
       <br>

       <div class="form-group" >
	   		{!! Form::label('name','Horas de la actividad') !!}
	   		<div style="width: 80px;">
	   		    {!! Form::number('horas',$actividades->horas,['class'=>'form-control','min'=>'1','max'=>'12', 'required'])!!}
	   		</div>
	   </div>
	   
	   <br>
	   <div class="form-group" >
	   		{!! Form::label('lugar','Lugar de la actividad') !!}
	   		{!! Form::text('lugar',$actividades->lugar,['class'=>'form-control','required','placeholder'=>'lugar de la actividad'])!!}
	   </div>
       <br>
       <div class="form-group" >
	   		{!! Form::label('inicio','Nombre de la actividad') !!}
	   		<div style="width: 265px;">
	   		{!! Form::date('inicio',$actividades->inicio,['class'=>'form-control','required'])!!}
	   	    </div>
	   </div>
       <br>
       <div class="form-group" >
	   		{!! Form::label('final','Nombre de la actividad') !!}
	   		<div style="width: 265px;">
	   		{!! Form::date('final',$actividades->final,['class'=>'form-control','required'])!!}
	   	    </div>
	   </div>
       <br>
	   
	  <div class="form-group">
	     	<div align="center">
	   		{!! Form::submit('Editar',['class'=>'btn btn-info','id'=>'btnEmpty' ]) !!}
	   		</div>
	   </div>

	</div>						
</div>	



							       
<script  src="{{asset('plugins/js-especiales/validacion.js')}}"> </script>




@endsection