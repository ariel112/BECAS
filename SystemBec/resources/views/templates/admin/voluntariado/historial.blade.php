@extends('templates.main')

@section('content')

<!--
        
<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">

 Header -->
						

								
@section('subtitle')
Historial de Actividades
@endsection


                            <section id="search" class="alt">
                                
                              <!-- Search
                            {!! Form::open(['route'=>'proyectos.index', 'method'=>'Get'])!!} -->
                         
                                <section id="search" class="alt">
                                    <form method="post" action="#">
                                        <input type="text" name="query" id="query" placeholder="Buscar" />
                                    </form>
                                </section>
                          
                            
                            <!--
                            {!!Form::text('name', null,[ 'id'=>'query','placeholder'=>'Buscar'])!!}

                            {!!Form::close()!!}    
                                </section>
                                -->
       <p style="text-align: center; color: #333333;">
             <font size="4" id="mes" >
              <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Actividades  </font >
           </p>
      <br><br>  

	<table class="table table-striped">
     	<thead>
     	<th class="success"  id="letra" style="text-align: center;">Nombre de la actividad</th>
        <th class="success"  id="letra"   style="text-align: center;">Horas</th>
        <th class="success"  id="letra"  style="text-align: center;">Incio</th>
        <th class="success"  id="letra"  style="text-align: center;">Final</th>
        <TH class="success"  id="letra"  style="text-align: center;">Lugar</TH>
        <th  class="success" id="letra"  style="text-align: center;" >Cantidad de becarios</th>
     	</thead>
        <tbody>
    @foreach($actividades as $actividad)
        	<tr> 
        		
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->nombre}}</td>
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->horas}}</td>
                <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->lugar}}</td>
        		<td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->inicio}}</td>
                <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;" >{{$actividad->final}}</td>
                <td id="letra" style="color: rgb(150, 156, 156  ); text-align: center;">0</td>
          


        	</tr>
    @endforeach        
         </tbody>
    
     </table>
     <!-- Mostramos el paginado -->
      {!! $actividades->render() !!}
   


@endsection