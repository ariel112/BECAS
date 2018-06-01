@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Becarios con Actividades Incompletas
@endsection


				
<div align="center" >			

	<H1>Becarios con Actividades Incompletas</H1>

</div>

             <div>
                 <a href="{{ route('products2.excel') }}" class="btn btn-sm btn-success">
                    Descargar Becarios en EXCEL  <span class="glyphicon glyphicon-save"> </span>
                    <br>
                </a>
                <br>
                </div>
                <br>

        	<table class="table table-hover table-striped">
     	<thead>
    <th class="success" id="letra" style="text-align: center;">Nombre Completo</th>
    <th class="success" id="letra"   style="text-align: center;">Identidad</th>
    <th class="success" id="letra"  style="text-align: center;">Telefono</th>
    <TH class="success" id="letra"  style="text-align: center;">Cargo</TH>
    <TH class="success" id="letra"  style="text-align: center;">Horas</TH>
    <th class="success" id="letra"  style="text-align: center;">Fecha</th>
    
     	</thead>
  
        <tbody>
    @foreach($planilla as $Planillas)
        	<tr> 
        		
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$Planillas->nombre}}</td>
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$Planillas->identidad}}</td>
                <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$Planillas->telefono}}</td>
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$Planillas->cargo}}</td>
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$Planillas->horas}}</td>
                <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$Planillas->mes}}</td>
        		


        	</tr>
    @endforeach        
         </tbody>
  
     </table>



@endsection