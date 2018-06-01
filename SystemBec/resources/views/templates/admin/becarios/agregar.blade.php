@extends('templates.main')
 <link rel="stylesheet" type="text/css" href="{{asset('plugins/css-personalizado/estilos-errores.css')}}">
@section('content')



<!-- Header -->
								

								
@section('subtitle')
Agregar Becario
@endsection
<div  class="row">
<div class="col-md-5">
 
      {!! Form::open(['route' => 'Becarios.store', 'method'=>'POST', 'files'=>true, 'id'=>'formEmpty','data-smk-icon'=>'glyphicon-remove-sign']) !!}
  
    <br>
   
   		<div align="center">
   			<legend>Datos del becario<br><br></legend>
   		</div>	
   		
       	
	   <div class="form-group">
	   		{!! Form::label('identidad','Identidad:',['class'=>'control-label']) !!}
	   		{!! Form::text('identidad',null,['class'=>'form-control','required','placeholder'=>'Escriba la idendtidad sin guiones o puntos. Ejemplo (0825166412189)...', 'minlength'=>'13' ,'maxlength'=>'13','pattern'=>'[0-9]'])!!}
	   </div>
	   <br>
	   <div class="form-group" >
	   		
	   	    <label class="control-label">Nombre Completo:</label>
	   		<input 
	   		type="text" name="nombre" class="form-control" placeholder="Nombre completo..." required
	   		  id="nombre"  >
	   		
	   </div>
            <br>

        <div class="form-group" style="width: 270px;"  >
	   		
	   		{!! Form::label('fecha_nacimiento','Fecha de Nacimiento:',['class'=>'control-label']) !!}
	   		<div style="width: 265px;">
	   		 {!! Form::date('fecha_nacimiento',null,['class'=>'form-control','required','placeholder'=>'Fecha de Nacimiento'])!!}	   
	   	    </div>
	   </div>
	
	   <br>
	   <div class="form-group" style="width: 209px;"  >
	   		{!! Form::label('genero','Genero:',['class'=>'control-label']) !!}
	   		<div style="width: 195px;">
	   		  {!! Form::select('genero',['Masculino'=> 'Masculino','Femenino'=>'Femenino'],null,['class'=>'form-control', 'required','placeholder'=>'Seleccione un Género..'])!!}
	   		</div>
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('telefono','Teléfono:',['class'=>'control-label']) !!}
	   		
	   		   {!! Form::number('telefono',null,['class'=>'form-control','required', 'minlength'=>'8' ,'maxlength'=>'8','placeholder'=>'Escriba el número telefónico sin guiones. Ejemplo (56542535)...'])!!}
	   		 
	   </div>
	   <br>
          <div class="form-group">
	   		{!! Form::label('correo','Correo electrónico:',['class'=>'control-label']) !!}
	   		{!! Form::email('correo',null,['class'=>'form-control','placeholder'=>'example@gmail.com'])!!}
	   </div>
	   
	   <br>
       <div class="form-group">
	   		{!! Form::label('Universidad','Universidad:',['class'=>'control-label']) !!}
	   		{!! Form::select('universidad',
	   		[
	   		'Universidad Nacional Autónoma de Honduras (UNAH)'=> 'Universidad Nacional Autónoma de Honduras (UNAH) ',
	   		'Universidad Pedagógica Nac. Francisco Morazán (UPNFM)'=>'Universidad Pedagógica Nac. Francisco Morazán (UPNFM)',
	   		'Universidad Católica de Honduras (UNICAH)'=>'Universidad Católica de Honduras (UNICAH)',
	   		'Universidad Tecnológica Centroamericana (UNITEC)'=>'Universidad Tecnológica Centroamericana (UNITEC)',
	   		'Escuela Agrícola Panamericana Zamorano'=>'Escuela Agrícola Panamericana Zamorano',
	   		'Universidad José Cecilio del Valle (UJCV)'=>'Universidad José Cecilio del Valle (UJCV)',
	   		'Universidad Politécnica de Ingeniería de Honduras (UPI)'=>'Universidad Politécnica de Ingeniería de Honduras (UPI)',
	   		'Universidad Metropolitana de Honduras (UNIMETRO)'=>' Universidad Metropolitana de Honduras (UNIMETRO)',
	   		'Centro de Diseño Arquitectura y Construcción (CEDAC)'=>'Centro de Diseño Arquitectura y Construcción (CEDAC)',
	   		 ]
	   		,null,['class'=>'form-control', 'required','placeholder'=>'Seleccione una universidad...'])!!}
	   </div>
	   <br>
	     <div class="form-group">
	   		{!! Form::label('carrera','Carrera:',['class'=>'control-label']) !!}
	   		{!! Form::text('carrera',null,['class'=>'form-control','required','placeholder'=>'Carrera...'])!!}
	   </div>
	   <br>
	     <div class="form-group">
	   		{!! Form::label('tipo_periodo','Tipo de periodo:',['class'=>'control-label']) !!}
	   		{!! Form::select('tipo_periodo',['Trimestrales'=> 'Trimestrales','Semestrales'=>'Semestrales'],null,['class'=>'form-control', 'required','placeholder'=>'Seleccione el tipo de periodo..'])!!}
	   </div>
	    <br>
	   
	    <div class="form-group" >
	   		{!! Form::label('direccion','Direcció:n:',['class'=>'control-label']) !!}
	   		{!! Form::textarea('direccion',null,['class'=>'form-control','required','rows'=>'4','maxlength'=>'150','placeholder'=>'Escriba la dirección....  '])!!}
	   </div>
	  
	   <br>

	   <br>


       
	   	<div align="center">
           <legend>Datos de la madre<br><br></legend>
        </div>   
           
       <div class="form-group">
	   		{!! Form::label('nombre_madre','Nombre completo: ',['class'=>'control-label']) !!}
	   		{!! Form::text('nombre_madre',null,['class'=>'form-control','placeholder'=>'Nombre completo...'])!!}
	   </div>
       <br>
        <div class="form-group">
	   		{!! Form::label('identidad_madre','Identidad:',['class'=>'control-label']) !!}
	   		{!! Form::text('identidad_madre',null,['class'=>'form-control', 'minlength'=>'13' ,'maxlength'=>'13','placeholder'=>'Escriba la identidad sin guiones o puntos. Ejemplo (0825166412189)...'])!!}
	   </div>
	   <br>
	   
	    <div class="form-group">
	   		{!! Form::label('ocupacion_madre','Ocupación:',['class'=>'control-label']) !!}
	   		{!! Form::text('ocupacion_madre',null,['class'=>'form-control','placeholder'=>'Ocupación...'])!!}
	   </div>
	   <br>
	    <div class="form-group">
	   		{!! Form::label('empresa_madre','Empresa:',['class'=>'control-label']) !!}
	   		{!! Form::text('empresa_madre',null,['class'=>'form-control','placeholder'=>'Empresa...'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('telefono_madre','Teléfono:',['class'=>'control-label']) !!}
	   	
	   		   {!! Form::number('telefono_madre',null,['class'=>'form-control', 'minlength'=>'8' ,'maxlength'=>'8','placeholder'=>'Escriba el número telefónico sin guiones. Ejemplo (56542535)...'])!!}
	   	 
	   </div>
	   <br>
	 
	   <div class="form-group">
	   		{!! Form::label('correo_madre','Correo electrónico:',['class'=>'control-label']) !!}
	   		{!! Form::email('correo_madre',null,['class'=>'form-control','placeholder'=>'example@gmail.com'])!!}
	   </div>
	   <br>
	   <br>
	   	<div align="center">
	   		<legend>Datos del padre<br><br></legend>
	   	</div>	
       <div class="form-group">
	   		{!! Form::label('nombre_padre','Nombre completo:',['class'=>'control-label']) !!}
	   		{!! Form::text('nombre_padre',null,['class'=>'form-control','placeholder'=>'Nombre completo...'])!!}
	   </div>
       <br>
        <div class="form-group">
	   		{!! Form::label('identidad_padre','Identidad:',['class'=>'control-label']) !!}
	   		{!! Form::text('identidad_padre',null,['class'=>'form-control', 'minlength'=>'13' ,'maxlength'=>'13','placeholder'=>'Escriba la identidad sin guiones o puntos. Ejemplo (0825166412189)...'])!!}
	   </div>
	   <br>
	   
	    <div class="form-group">
	   		{!! Form::label('ocupacion_padre','Ocupación:',['class'=>'control-label']) !!}
	   		{!! Form::text('ocupacion_padre',null,['class'=>'form-control','placeholder'=>'Ocupación...'])!!}
	   </div>
	   <br>
	    <div class="form-group">
	   		{!! Form::label('empresa_padre','Empresa:',['class'=>'control-label']) !!}
	   		{!! Form::text('empresa_padre',null,['class'=>'form-control','placeholder'=>'Empresa...'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('telefono_padre','Teléfono:',['class'=>'control-label']) !!}
	   		   		  {!! Form::number('telefono_padre',null,['class'=>'form-control', 'minlength'=>'8' ,'maxlength'=>'8','placeholder'=>'Escriba el número telefónico sin guiones. Ejemplo (56542535)...'])!!}
	   		  
	   </div>
	   <br>
	 
	   <div class="form-group">
	   		{!! Form::label('correo_padre','Correo electronico:',['class'=>'control-label']) !!}
	   		{!! Form::email('correo_padre',null,['class'=>'form-control','placeholder'=>'example@gmail.com'])!!}
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