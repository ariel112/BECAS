@extends('templates.main')

@section('content')
								
@section('subtitle')
Historial de todas las horas detalladoas
@endsection
          <p style="text-align: center; color: #333333;">
              <font size="4" id="mes" >
                <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Horas Acomuladas  
              </font >
          </p>
          <br><br>  

        	<table class="table table-striped">
             	
              <thead>
               	  <th class="success"  id="letra" style="text-align: center;">Fecha</th>
                  <th class="success"  id="letra"   style="text-align: center;">Horas</th>
                  <th class="success"  id="letra"   style="text-align: center;">Nombre de la actividad</th>
              </thead>
            @foreach($historico as $historico)    
              <tbody>
                  <tr>                     
                    <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$historico->fecha}}</td>
                    <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$historico->horas}}</td>
                    <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$historico->nombre}}</td>                  
                  </tr>                
              </tbody>
            @endforeach  
          </table>
             
 @endsection