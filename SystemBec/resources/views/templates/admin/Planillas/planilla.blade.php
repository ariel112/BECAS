

@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Becarios con Actividades Completas
@endsection



<div align="center">
 <h1> Becarios con Actividades Completas</h1>
</div>
				<div>
				 <a href="{{ route('products.excel') }}" class="btn btn-sm btn-success">
                    Becarios con Actividades Completas en EXCEL  <span class="glyphicon glyphicon-save"> </span>
                    <br>
                </a>
                <br>
                </div>
                    


        	<table class="table table-hover table-striped">
                <br>
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

 

<div id="app">
    <example-component></example-component> 
    <planilla-vue></planilla-vue>
</div>

@endsection


