@extends('templates.main')


@section('content')

								
@section('subtitle')
Editar Becarios
@endsection

<div class="row">
<div class="col-md-6">

      {!! Form::open(['route' => ['Becarios.update',$becarios], 'method'=>'PUT' ,'files'=>true, 'id'=>'formEmpty','data-smk-icon'=>'glyphicon-remove-sign']) !!}
    
       <br>
   <br>
   		<div align="center">
   			<legend>Datos del becario<br><br></legend>
   		</div>	
       <div class="form-group">
	   		{!! Form::label('nombre','Nombre Completo',['class'=>'control-label']) !!}
	   		{!! Form::text('nombre',$becarios->nombre,['class'=>'form-control','required'])!!}
	   </div>
	   <br>            <br>

        <div class="form-group">
	   		
	   		{!! Form::label('fecha_nacimiento','Fecha de Nacimiento',['class'=>'control-label']) !!}
	   		<div style="width: 265px;">
	   		 {!! Form::date('fecha_nacimiento',$becarios->fecha_nacimiento,['class'=>'form-control','required','placeholder'=>'Nombre completo'])!!}	   
	   	    </div>
	   </div>
	    	<br>
	   <div class="form-group">
	   		{!! Form::label('identidad','Identidad',['class'=>'control-label']) !!}
	   		{!! Form::number('identidad',$becarios->identidad,['class'=>'form-control','required','placeholder'=>'Escriba la idendtidad sin guiones o puntos. Ejemplo (0825166412189)', 'minlength'=>'13' ,'maxlength'=>'13','pattern'=>'[0-9]'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('genero','Genero',['class'=>'control-label']) !!}
	   		<div style="width: 190px;">
	   		  {!! Form::select('genero',['Masculino'=> 'Masculino','Femenino'=>'Femenino'],$becarios->genero,['class'=>'form-control','placeholder'=>'Seleccione un Genero..', 'required'])!!}
	   		</div>
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('telefono','Telefono',['class'=>'control-label']) !!}
	   		
	   		   {!! Form::number('telefono',$becarios->telefono,['class'=>'form-control','required', 'minlength'=>'8' ,'maxlength'=>'8','placeholder'=>'Escriba el numero telefonico sin guiones. Ejemplo (56542535)'])!!}
	   		 
	   </div>
	   <br>
          <div class="form-group">
	   		{!! Form::label('correo','Correo electronico',['class'=>'control-label']) !!}
	   		{!! Form::email('correo',$becarios->correo,['class'=>'form-control','placeholder'=>'example@gmail.com'])!!}
	   </div>
	   
	   <br>
       <div class="form-group">
	   		{!! Form::label('Universidad','Universidad',['class'=>'control-label']) !!}
	   		{!! Form::text('universidad',$becarios->universidad,['class'=>'form-control','required'])!!}
	   </div>
	   <br>
	     <div class="form-group">
	   		{!! Form::label('carrera','Carrera',['class'=>'control-label']) !!}
	   		{!! Form::text('carrera',$becarios->carrera,['class'=>'form-control','required','placeholder'=>'Escriba la informacion....  '])!!}
	   </div>
	    <br>
	   
	    <div class="form-group">
	   		{!! Form::label('direccion','Direccion',['class'=>'control-label']) !!}
	   		{!! Form::textarea('direccion',$becarios->direccion,['class'=>'form-control','required', 'placeholder'=>'Escriba la direccion....  '])!!}
	   </div>
	  
	   <br>

	   <br>


       
	   	<div align="center">
           <legend>Datos de la madre<br><br></legend>
        </div>   
           
       <div class="form-group">
	   		{!! Form::label('nombre_madre','Nombre completo ',['class'=>'control-label']) !!}
	   		{!! Form::text('nombre_madre',$becarios->nombre_madre,['class'=>'form-control','placeholder'=>'Nombre completo'])!!}
	   </div>
       <br>
        <div class="form-group">
	   		{!! Form::label('identidad_madre','Identidad',['class'=>'control-label']) !!}
	   		{!! Form::number('identidad_madre',$becarios->identidad_madre,['class'=>'form-control', 'minlength'=>'13' ,'maxlength'=>'13','placeholder'=>'Escriba la identidad sin guiones o puntos. Ejemplo (0825166412189)'])!!}
	   </div>
	   <br>
	   
	    <div class="form-group">
	   		{!! Form::label('ocupacion_madre','Ocupacion',['class'=>'control-label']) !!}
	   		{!! Form::text('ocupacion_madre',$becarios->ocupacion_madre,['class'=>'form-control'])!!}
	   </div>
	   <br>
	    <div class="form-group">
	   		{!! Form::label('empresa_madre','Empresa',['class'=>'control-label']) !!}
	   		{!! Form::text('empresa_madre',$becarios->empresa_madre,['class'=>'form-control'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('telefono_madre','Telefono',['class'=>'control-label']) !!}
	   	
	   		   {!! Form::number('telefono_madre',$becarios->telefono_madre,['class'=>'form-control', 'minlength'=>'8' ,'maxlength'=>'8','placeholder'=>'Escriba el numero telefonico sin guiones. Ejemplo (56542535)'])!!}
	   	 
	   </div>
	   <br>
	 
	   <div class="form-group">
	   		{!! Form::label('correo_madre','Correo electronico',['class'=>'control-label']) !!}
	   		{!! Form::email('correo_madre',$becarios->correo_madre,['class'=>'form-control','placeholder'=>'example@gmail.com'])!!}
	   </div>
	   <br>
	   <br>
	   	<div align="center">
	   		<legend>Datos del padre<br><br></legend>
	   	</div>	
       <div class="form-group">
	   		{!! Form::label('nombre_padre','Nombre completo',['class'=>'control-label']) !!}
	   		{!! Form::text('nombre_padre',$becarios->nombre_padre,['class'=>'form-control','placeholder'=>'Nombre completo'])!!}
	   </div>
       <br>
        <div class="form-group">
	   		{!! Form::label('identidad_padre','Identidad',['class'=>'control-label']) !!}
	   		{!! Form::number('identidad_padre',$becarios->identidad_padre,['class'=>'form-control', 'minlength'=>'13' ,'maxlength'=>'13','placeholder'=>'Escriba la identidad sin guiones o puntos. Ejemplo (0825166412189)'])!!}
	   </div>
	   <br>
	   
	    <div class="form-group">
	   		{!! Form::label('ocupacion_padre','Ocupacion',['class'=>'control-label']) !!}
	   		{!! Form::text('ocupacion_padre',$becarios->ocupacion_padre,['class'=>'form-control'])!!}
	   </div>
	   <br>
	    <div class="form-group">
	   		{!! Form::label('empresa_padre','Empresa',['class'=>'control-label']) !!}
	   		{!! Form::text('empresa_padre',$becarios->empresa_padre,['class'=>'form-control'])!!}
	   </div>
	   <br>
	   <div class="form-group">
	   		{!! Form::label('telefono_padre','Telefono',['class'=>'control-label']) !!}
	   		   		  {!! Form::number('telefono_padre',$becarios->telefono_padre,['class'=>'form-control', 'minlength'=>'8' ,'maxlength'=>'8','placeholder'=>'Escriba el numero telefonico sin guiones. Ejemplo (56542535)'])!!}
	   		  
	   </div>
	   <br>
	 
	   <div class="form-group">
	   		{!! Form::label('correo_padre','Correo electronico',['class'=>'control-label']) !!}
	   		{!! Form::email('correo_padre',$becarios->correo_padre,['class'=>'form-control','placeholder'=>'example@gmail.com'])!!}
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