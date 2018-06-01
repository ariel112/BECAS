@extends('templates.main')

@section('content')

<!--
        
<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">

 Header -->
						

								
@section('subtitle')
Home Actividades
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
                <font size="4" id="mes" ><span class="glyphicon glyphicon-calendar" aria-hidden="true"></span> Actividades del mes de agosto </font >
            <br><br>    

	<table class="table table-striped">
     	<thead>
    <th class="success" id="letra" style="text-align: center;">Nombre de la actividad</th>
    <th class="success" id="letra"   style="text-align: center;">Horas</th>
    <th class="success" id="letra"  style="text-align: center;">Lugar</th>
    <TH class="success" id="letra"  style="text-align: center;">Inicio</TH>

    <TH class="success" id="letra"  style="text-align: center;">Final</TH>
    <th class="success" id="letra"  style="text-align: center;">Accion</th>
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
                <a href="{{route('Actividades.destroy',$actividad->id)}}" onclick="return confirm('seguro que deseas eliminarlo?')" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
     


        	</tr>
    @endforeach        
         </tbody>
    
     </table>
     <!-- Mostramos el paginado -->
      {!! $actividades->render() !!}
   


@endsection