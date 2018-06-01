@extends('templates.main')

@section('content')

						
@section('subtitle')
Historial de todas las horas
@endsection

          <button class="btn btn-info"><a href="{{route('Becarios.mostrar_historicos',$becarios->id)}}">Historico de horas</a></button>
          <p style="text-align: center; color: #333333;">
             <font size="4" id="mes" >
              <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Horas Acomuladas  </font >
          </p>
          <br><br>  

        	<table class="table table-striped">

           	<thead>
           	  <th class="success"  id="letra" style="text-align: center;">Mes</th>
              <th class="success"  id="letra"   style="text-align: center;">Horas</th>
            </thead>

            <tbody>
                @foreach($historial_horas as $historial)
                  <tr>                  
                    <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$historial->TER}}</td>
                    <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$historial->resultado}}</td>            
                  </tr>
                @endforeach     
            </tbody>

          </table>   
   
@endsection