@extends('templates.main')

@section('content')
						
	@section('subtitle')
	Agregar Taller
	@endsection

		<div  class="row">
		<div class="col-md-5">

		      {!! Form::open(['route' => 'Actividades.store', 'method'=>'POST', 'files'=>true, 'id'=>'formEmpty','data-smk-icon'=>'glyphicon-remove-sign']) !!}
		   <br>
		   <br>
			   <div class="form-group" >	   
			   		{!! Form::label('name','Nombre del Taller:') !!}
			   		{!! Form::text('nombre',null,['class'=>'form-control','required','placeholder'=>'Nombre...'])!!}	   	
			   </div>
			    <br>       
		       {!! Form::label('name','Encargado del Taller:') !!}	   	
		       <div class="form-group"  >	   		
			   		    {!! Form::text('encargado',null,['class'=>'form-control', 'required','placeholder'=>'Encargado...'])!!}	   		
			   </div>
			   <br>       
		       {!! Form::label('name','Objetivo del Taller:') !!}	   	
		       <div class="form-group"  >	   		
			   		    {!! Form::text('objetivo',null,['class'=>'form-control', 'required','placeholder'=>'Objetivo...'])!!}	   		
			   </div>
			   <br>       
		       {!! Form::label('name','Logistica del Taller:') !!}	   	
		       <div class="form-group"  >	   		
			   		    {!! Form::text('logistica',null,['class'=>'form-control', 'required','placeholder'=>'Logistica...'])!!}	   		
			   </div>
			   <br>    
		       {!! Form::label('name','Descripción del Taller:') !!}	   
		       <div class="form-group" >	   		
			   {!! Form::text('alcance',null,['class'=>'form-control', 'required','placeholder'=>'Alcance...'])!!}	   		
			   </div>	   
		       <br>       
		       {!! Form::label('name','Horas:') !!}	   	
		       <div class="form-group" style="width: 93px;" >
			   	    <div style="width: 87px;">
			   		    {!! Form::number('horas',null,['class'=>'form-control','min'=>'1','max'=>'12', 'required'])!!}
			   		</div>
			   </div>	   
			   <br>
			   <div class="form-group" >
			   		{!! Form::label('lugar','Lugar:') !!}
			   		{!! Form::text('lugar',null,['class'=>'form-control','required','placeholder'=>'Punto de reunión...'])!!}
			   </div>
		       <br>
		       <div class="form-group" style="width: 270px;"  >
			   		{!! Form::label('inicio','Inicio del Taller:') !!}
			   		<div style="width: 265px;">
			   		{!! Form::date('inicio',null,['class'=>'form-control','required'])!!}
			   	    </div>
			   </div>
		       <br>
		       <div class="form-group" style="width: 270px;"  >
			   		{!! Form::label('final','Fin del Taller:') !!}
			   		<div style="width: 265px;">
			   		{!! Form::date('final',null,['class'=>'form-control','required'])!!}
			   	    </div>
			   </div>
		       <br>
			     <div class="form-group">
			     	<div align="center">
			   		{!! Form::submit('Registrar',['class'=>'btn btn-info','id'=>'btnEmpty' ]) !!}
			   		</div>
			   </div>
			</div>						
		</div>						       
		<script  src="{{asset('plugins/js-especiales/validacion.js')}}"> </script>

@endsection