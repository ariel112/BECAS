@extends('templates.main')

@section('content')

								
@section('subtitle')
Historial de Actividades
@endsection

                            <section id="search" class="alt">
                         
                                <section id="search" class="alt">
                                    <form method="post" action="#">
                                        <input type="text" name="query" id="query" placeholder="Buscar" />
                                    </form>
                                </section>
                          
                            
           <p style="text-align: center; color: #333333;">
             <font size="4" id="mes" >
              <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Actividades  </font >
           </p>
           <br><br>  

	<table class="table table-hover table-striped">
     	<thead>
     	<th class="success"  id="letra" style="text-align: center;">Nombre de la actividad</th>
        <th class="success"  id="letra"   style="text-align: center;">Horas</th>
        <th class="success"  id="letra"  style="text-align: center;">Lugar</th>
        <th class="success"  id="letra"  style="text-align: center;">Incio</th>
        <th class="success"  id="letra"  style="text-align: center;">Final</th>
        <th  class="success" id="letra"  style="text-align: center;" >Cantidad de becarios</th>
     	</thead>
        
        <tbody>
      <!--Ciclo para recorrer todos los datos de las actividades -->
      @foreach($actividades as $actividad)
        	<tr> 
        		
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->nombre}}</td>
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->horas}}</td>
                <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->lugar}}</td>
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->inicio}}</td>
                <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->final}}</td>
                <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;">{{$actividad->cantidad}}</td>         

        	</tr>
      @endforeach        
         </tbody>
    
     </table>
    


@endsection