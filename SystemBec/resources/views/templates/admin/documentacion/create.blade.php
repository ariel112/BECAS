@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Actualizar Documentación
@endsection


<div  class="row">
<div class="col-md-4">

      {!! Form::open(['route' => ['Becarios-document.store',$becarios->id], 'method'=>'POST', 'files'=>true]) !!}
   <br>
   
   

	  
	   <div class="form-group">
	   		
	   		<div class="form-group" >
	   		{!! Form::label('nombre_periodo','Nombre del periodo:') !!}
	   		@if($becarios->tipo_periodo=='Trimestrales')
	   		{!! Form::select('nombre_periodo',['I periodo Academico'=> 'I periodo Academico','II periodo Academico'=>'II periodo Academico','III periodo Academico'=>'III periodo Academico'],null,['class'=>'form-control', 'required','placeholder'=>'Seleccione un periodo..'])!!}
	   		@else
	   		{!! Form::select('nombre_periodo',['I periodo Academico'=> 'I periodo Academico','II periodo Academico'=>'II periodo Academico'],null,['class'=>'form-control', 'required','placeholder'=>'Seleccione un periodo..'])!!}
	   		@endif
	        </div>
	        <br>
	   		 {!! Form::label('name','Promedio Global:') !!}	   	
            <div class="form-group" style="width: 93px;" >
	   		<div style="width: 87px;">
	   		    {!! Form::number('prom_global',null,['class'=>'form-control','min'=>'1','max'=>'100', 'required'])!!}
	   		</div>
	        </div>
	        <br>
	        {!! Form::label('name','Promedio del periodo:') !!}	   	
            <div class="form-group" style="width: 93px;" >
	   		<div style="width: 87px;">
	   		    {!! Form::number('prom_periodo',null,['class'=>'form-control','min'=>'1','max'=>'100', 'required'])!!}
	   		</div>
	        </div> 
	        <br>
	        {!! Form::label('historial','Seleccione el PDF de HISTORIAL ACADEMICO') !!}
	   		{!! Form::file('historial',null,['class'=>'btn','required'])!!}	
	   		<br>
	   		{!! Form::label('forma03','Seleccione el PDF de la FORMA 03') !!}
	   		{!! Form::file('forma03',null,['class'=>'btn','required'])!!}	
	   		
	    
	   		 <input style="visibility: hidden;" type="text" name="becario_id" value="{{$becarios->id}} ">
	   		 
	   </div>
	
  
		  
	     <div class="form-group">
	   		{!! Form::submit('Registrar',['class'=>'btn btn-info']) !!}
	   </div>

	</div>						
</div>



















@endsection