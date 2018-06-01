@extends('templates.main')

@section('content')
								
@section('subtitle')
Home Becarios
@endsection                

  <!--Buscador dinamico -->     
  <section id="search" class="alt">
      {!! Form::open(['route'=>'Becarios.index', 'method'=>'Get'])!!}
      {!!Form::text('name', null,[ 'id'=>'query','placeholder'=>'Buscar'])!!}
      {!!Form::close()!!}        
  </section>

	<table class="table table-hover table-striped">
     	<thead>
        <th  id="letra" style="text-align: center; color: deepskyblue;">Foto</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Nombre Completo</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Cargo</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Identidad</th>
        <TH id="letra" style="text-align: center; color: deepskyblue;">Universidad</TH>
        <TH id="letra" style="text-align: center; color: deepskyblue;">Editar</TH>
        
     	</thead>
      <tbody id="table-content">
        @foreach ($becarios as $becario)
         	<tr>

          <td style="text-align: center;"> 
        		  <!--Condicion para colocar la imagen segun su genero -->      
              @if($becario->images==null && $becario->genero=="Masculino" )         
                        
                        <a href="{{route('Becarios.perfil',$becario->id)}}"  class="image">
                          <img id="perfil" src="{{asset('images/masculino.jpg')}}" 
                                    style=" 
                                    height: 70px;
                                    width: 70px;
                                    /* los siguientes valores son independientes del tamaño del círculo */
                                    background-repeat: no-repeat;
                                    background-position: 50%;                                    
                                    background-size: 100% auto;" 
                          />
                        </a>

              @elseif($becario->images==null && $becario->genero=="Femenino" )                   
                        
                        <a href="{{route('Becarios.perfil',$becario->id)}}"  class="image">
                          <img id="perfil" src="{{asset('images/femenino.jpg')}}" 
                                    style=" 
                                    height: 70px;
                                    width: 70px;
                                    /* los siguientes valores son independientes del tamaño del círculo */
                                    background-repeat: no-repeat;
                                    background-position: 50%;                                    
                                    background-size: 100% auto;" />
                        </a>
              <!--Si el becario tiene imagen ya tomada con la camara aparecera aqui -->          
              @elseif($becario->images!=null)
                    
                        <a href="{{route('Becarios.perfil',$becario->id)}}"  class="image">
                          <img id="perfil" src="/images/perfiles/{{ $becario->images->name}}" 
                                    style=" 
                                    height: 70px;
                                    width: 70px;
                                    /* los siguientes valores son independientes del tamaño del círculo */
                                    background-repeat: no-repeat;
                                    background-position: 50%;
                                    
                                    background-size: 100% auto;" />
                    </a>

              @endif
            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
    			  </td>
        		
        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
                <br><br>{{$becario->nombre}}
              </td>        		
              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
                   <span ><br><br>{{$becario->cargo}}</span>                 
              </td>
        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
                   <span ><br><br>{{$becario->identidad}}</span>                                              
              </td>

        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
                   <br><br>{{$becario->universidad}}   
              </td>
              <!--Boton para editar al becario sus datos -->
        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
                    <a href="{{route('Becarios.edit',$becario->id)}}" class="image"><br><img src="{{asset('images/editar.png')}}" style="height: 70px; width: 70px;" ></a>
              </td> 

            </tr>
          @endforeach 
        </tbody>           
  
  </table>
    <!--Paginacion -->
    {!!$becarios->render()!!}

    <!-- Abner: script encargado de aplicar el filtro -->
<script type="text/javascript">
    var server = 'http://localhost:8000';
    $('#query').keyup(function(){    
        $.get(server+'/Becarios/'+$('#query').val(), function(response){
            var becarios = JSON.parse(response).data;
            var rows = "";
            becarios.forEach(function(becarios){
                var cargo = becarios.cargo === "" ? 'No encontrado' : becarios.cargo;
                var estado = becarios.estado === "" ? 'Aspirante' : becarios.estado;
                var asignar = becarios.estado === "Activo" ? '<a href="'+server+'/becarios/'+becarios.id+'/asignar" class="image"><br><img src="{{asset('images/asignar.png')}}" style="height: 70px; width: 70px;" ></a>' : '';
                var newRow =    '<tr>'+
                                
                                '<td style="text-align: center;"> ' +
                                '    <a href="'+server+'/becariossPerfil/'+becarios.id+'" class="image"><img src="/images/perfiles/'+becarios.id+'" '+
                                '    style=" ' +
                                '    height: 110px;' +
                                '    width: 110px;' +
                                '    background-repeat: no-repeat;' +
                                '    background-position: 50%;' +
                                '    border-radius: 50%;' +
                                '    background-size: 100% auto;" />' +
                                '    </a>' +
                                '</td>' +

                                '<td style="color: rgb(150, 156, 156  ); text-align: center;"><br><br>'+becarios.nombre+'</td>' +
                                
                                '<td style="color: rgb(150, 156, 156  ); text-align: center;">' +
                                '    <span ><br><br>'+cargo+'</span>' +
                                '</td>' +

                                '<td style="color: rgb(150, 156, 156  ); text-align: center;">' +
                                '    <span ><br><br>proyecto</span>' +
                                '</td>' +

                                '<td style="color: rgb(150, 156, 156  ); text-align: center;">' +
                                '    <br><br>estado' +
                                '</td>'+
                                '<td style="color: rgb(150, 156, 156  ); text-align: center;">' +
                                '    <a href="'+server+'/admin/becarioss/'+becarios.id+'/edit" class="image"><br><img src="{{asset('images/editar.png')}}" style="height: 70px; width: 70px;" ></a>' +
                                '</td>' +
                                '<td style="color: rgb(150, 156, 156  ); text-align: center;">'+asignar+'</td>'+
                                '</tr>'
                rows = rows + newRow;
                $('#table-content').html(rows);
            });
        });
    })
</script>

<script  src="{{asset('plugins/js-especiales/mensajes.js')}}"> </script>
@endsection