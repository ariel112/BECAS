@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Becarios Trimestrales
@endsection





<div align="center">
 <h1>Becarios Trimestrales</h1>
</div>





<div  class="row">
<div class="col-md-4">

      {!! Form::open(['route' => ['trimestrales.store'], 'method'=>'POST', 'files'=>true]) !!}
   <br>
   
   
      
       <div class="form-group">
            
            <br>
            {!! Form::label('actualizacion','Actualización',['class'=>'control-label']) !!}
            {!! Form::select('actualizacion',['Actualizados'=> 'Actualizados','Desactualizados'=>'Desactualizados'],null,['class'=>'form-control', 'required','placeholder'=>'Seleccione el estado..'])!!}
             
       </div>
    
  
          
         <div class="form-group">
            {!! Form::submit('Registrar',['class'=>'btn btn-info', 'onclick'=>'return confirm("seguro que deseas desactuallizar los documentos?" )']) !!}
       </div>

    </div>                      
</div>



				
	

				
<div >			

</div>


@endsection