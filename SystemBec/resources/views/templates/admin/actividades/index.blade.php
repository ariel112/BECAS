@extends('templates.main')

@section('content')
								
@section('subtitle')
Home Actividades
@endsection
    <div align="center"> 
    <br>   
    <font size="4" id="mes">
        <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> 
                    Actividades del mes de

                    @if($carbon->format('m')==01)
                     <b>Enero</b>
                    @elseif($carbon->format('m')==02)
                      <b>Febrero</b>
                    @elseif($carbon->format('m')==03)
                      <b>Marzo</b>
                    @elseif($carbon->format('m')==04)
                      <b>Abril</b>
                    @elseif($carbon->format('m')==05)
                      <b>Mayo</b>
                    @elseif($carbon->format('m')==06)
                      <b>Junio</b>
                    @elseif($carbon->format('m')==07)
                      <b>Julio</b>
                    @elseif($carbon->format('m')==8)
                      <b>Agosto</b>
                    @elseif($carbon->format('m')==9)
                      <b>Septiembre</b>
                    @elseif($carbon->format('m')==10)
                      <b>Octubre</b>
                    @elseif($carbon->format('m')==11)
                      <b>Noviembre</b>
                    @elseif($carbon->format('m')==12)
                      <b>Diciembre</b>                    
                    @endif 
                     
    </font >
            <br><br>
            <br>    
    </div>        
	<table class="table table-hover table-striped">
     	<thead>
    <th class="success" id="letra" style="text-align: center;">Nombre de la actividad</th>
    <th class="success" id="letra"   style="text-align: center;">Horas</th>
    <th class="success" id="letra"  style="text-align: center;">Lugar</th>
    <TH class="success" id="letra"  style="text-align: center;">Inicio</TH>
    <TH class="success" id="letra"  style="text-align: center;">Final</TH>
    <th class="success" id="letra"  style="text-align: center;">Acción</th>
    
     	</thead>
        <tbody>
    @foreach($actividades as $actividad)
        	<tr> 
        		
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->nombre}}</td>
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->horas}}</td>
                <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->lugar}}</td>
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->inicio}}</td>
                <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->final}}</td>
                <td id="letra" style="text-align: center;"><a href="{{route('Actividades.edit',$actividad->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                <a href="{{route('Actividades.destroy',$actividad->id)}}" style="background-color: #f51e18; color: white; " onclick="return confirm('seguro que deseas desactivarla?')" class="btn"><span class="glyphicon glyphicon-off" aria-hidden="true"></span></a></td>
     


        	</tr>
    @endforeach        
         </tbody>
    
     </table>
      

@endsection