@extends('templates.main')

@section('content')
								

		@section('subtitle')
		
		Perfil Becario    

		@endsection

            <!-- Fichiers CSS -->
			<link rel="stylesheet" href="{{ asset('plugins/cv/sheldon/reset.css')}}">
			<!--[if lt IE 9]> 
				<link rel="stylesheet" href="css/cv.css" media="screen">
			<![endif]-->
			<link rel="stylesheet" media="screen and (max-width:480px)" href="{{ asset('plugins/cv/sheldon/mobile.css')}}">

			<link rel="stylesheet" media="screen and (min-width:481px)" href="{{ asset('plugins/cv/sheldon/cv.css')}}">
			<link rel="stylesheet" media="print" href="{{ asset('plugins/cv/sheldon/print.css')}}">
     




	<header role="banner">
		<div style="background-color: #76a79d;height: 50%; width: 75%; position: absolute;"></div>

		<div class="row" style="padding-top: 150px;">
			<div class="col-lg-9 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
				<div class="row well">
					<div class="col-lg-6 col-md-6 col-sm-10 col-xs-12" style="height: 80%; width: 35%;">
		
						<!-- aqui va el codigo de la imagen-->
						@if($becarios->images==null && $becarios->genero=="Masculino" )
							<a href="{{route('Becarios.foto',$becarios->id)}}" class="image"><img src="{{asset('images/masculino.jpg')}}" alt="Maculino" class="img-responsive img-rounded" style="padding-top: 6.5%" /></a>
						@elseif($becarios->images==null && $becarios->genero=="Femenino" )
							<a href="{{route('Becarios.foto',$becarios->id)}}" class="image"><img src="{{asset('images/femenino.jpg')}}" alt="Femenino" class="img-responsive img-rounded" style="padding-top: 6.5%" /></a> 
						@elseif($becarios->images!=null)
							<a href="{{route('Becarios.foto',$becarios->id)}}" class="image">
							<img src="/images/perfiles/{{ $becarios->images->name}}" alt="no encontro la imagen" class="img-responsive img-rounded" style="padding-top: 6.5%" /></a>
						@endif

						<!-- Botones Editar Cargo y Editar Estado-->
						<br><br>
						<div align="center">
							<a  href="{{route('asignar_estado.edit',$becarios->id)}}"><font class="glyphicon glyphicon-plus" id="espaciados" size="4"> Editar Estado</font></a>
							<br>
							<a  href="{{route('asignar_cargo.edit',$becarios->id)}}"><font class="glyphicon glyphicon-plus" id="espaciados" size="4"> Editar Cargo</font></a>
						</div>
	                    
					</div>
					<div class=" col-md-6 col-sm-10 col-xs-12">
						<h3><b>{{$becarios->nombre}}</b></h3>

						<h3 style="color:#b9b1b1;"> {{$becarios->identidad}} </h3>

						 @if($becarios->cargo=="Becario")                       
	                        
	                        <a data-toggle="modal" data-target="#myGuia" >
	                        	<font  id="espaciados" size="6" face="arial" >{{$becarios->cargo}}</font>
	                        </a>
	                       
	                     @elseif($becarios->cargo=="Guia")
	                        <a data-toggle="modal" data-target="#myEmbajador" >
	                        	<font  id="espaciados" size="6" face="arial" >{{$becarios->cargo}}</font>
	                        </a>
	                        <br><br>
	                        <a data-toggle="modal" data-target="#myLista" >
	                        	<font  id="espaciados" size="6" face="arial" >Lista </font>
	                        </a>
	                     @elseif($becarios->cargo=="Embajador")
	                     	<a data-toggle="modal" data-target="#myCasa" >
	                        	<font  id="espaciados" size="6" face="arial" >{{$becarios->cargo}}</font>
	                        </a>
	                        <br><br>
	                        <a data-toggle="modal" data-target="#myListaE" >
	                        	<font  id="espaciados" size="6" face="arial" >Lista </font>
	                        </a>
	                     @endif

						

						@if($becarios->estado=="")
						<div style="margin-top: 8px;">
							<div style="background: rgb(29, 206, 183); height: 40px; width: 154px; border-radius: 10px; padding-top:8px;">
								<font style="padding: 8px;margin-top:  4px; color: white;"  size="6"   > Aspirante</font>
							</div>
						</div>
						@elseif($becarios->estado=="Activo")           
						<div style="margin-top: 8px;">
							<div style="background: rgba(139,197,65,1); height: 40px; width: 100px; border-radius: 10px; padding-top:8px;">
							 	<a  data-toggle="modal" data-target="#myModal_estado" style="color: white; margin-top: 9px; padding-top: 20; ">
								<font style="padding: 8px;margin-top:  8px;" size="6"  > {{$becarios->estado}}</font></a>
							</div>
						</div>     
						@elseif($becarios->estado=="Inactivo")           
						<div style="margin-top: 8px;">
						     <div style="background: rgb(255, 25, 25); height: 40px; width: 130px; border-radius: 10px; padding-top:8px;">
								<a  data-toggle="modal" data-target="#myModal_estado" style="color: white; margin-top: 9px; padding-top: 20; ">
								<font style="padding: 8px;margin-top:  8px;" size="6"  > {{$becarios->estado}}</font></a>
						     </div>
						</div>
						@elseif($becarios->estado=="Practica")           
						<div style="margin-top: 8px;">
						     <div style="background: rgb(25, 62, 255); height: 40px; width: 130px; border-radius: 10px; padding-top:8px;">
								<a  data-toggle="modal" data-target="#myModal_estado" style="color: white; margin-top: 9px; padding-top: 20; ">
								<font style="padding: 8px;margin-top:  8px;" size="6"  > {{$becarios->estado}}</font></a>
						     </div>
						</div>

						@endif 

						@if($becarios->actualizacion=="Actualizados")
						<br><h6 class='glyphicon glyphicon-ok-sign' style='color:rgba(10,170,20,1);'> Documentos Actualizados</h6>
					    @else					    
						<br><h6 id='espaciado' class='glyphicon glyphicon-remove-sign' style='color:red;'> Documentos Desactualizados</h6>	
						@endif
					        
                        

                        <!-- Botones de Información de padres -->
                        <!-- Trigger the modal de la referencia -->
                        <div align="center">
	                        @if($becarios->nombre_madre==null)
	                        @else
	                        <br><br>
	                        <a data-toggle="modal" data-target="#myModal" >
	                        	<font class="glyphicon glyphicon-user" id="espaciados" size="4" face="arial" > Datos de la madre</font>
	                        </a>

	                      	@endif
							
							@if($becarios->nombre_padre==null)
	                        @else
							<!-- Trigger the modal del padre-->	
							<br><br>
							<a data-toggle="modal" data-target="#myProyecto" >
								<font class="glyphicon glyphicon-user" id="espaciados" size="4" face="arial"> Datos del padre</font>
							</a>
							@endif
					    </div>

					</div>
				</div>
				<div class="row">
					<div class="btn-group col-lg-11 col-lg-offset-1">
						<!-- Modal de la referencia de los becarios -->
						<div id="myModal"   class="modal fade" role="dialog">
						  <div class="modal-dialog" >
						    <!-- Modal content-->
						    <div class="modal-content" ">
						      <div class="modal-header">
						        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
						        <h4 class="modal-title" align="center" style="color: deepskyblue; ">Madre</h4>
						      </div>
						      <div class="modal-body">
						      	<font><b>Nombre:</b><font style="color: grey;"> {{$becarios->nombre_madre}}</font></font><br>
						      	<font><b>Identidad:</b><font style="color: grey;"> {{$becarios->identidad_madre}}</font></font><br>
						      	<font><b>Telefono:</b><font style="color: grey;"> {{$becarios->telefono_madre}}</font></font><br>
						      	<font><b>Email:</b><font style="color: grey;"> {{$becarios->correo_madre}}</font></font><br>
						      	<font><b>Direccion:</b><font style="color: grey;"> {{$becarios->direccion_madre}}</font></font><br><br>
						      </div>
						      <div class="modal-footer">
						        <button type="button" class="btn" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>

						<!-- Modal del estado de los becarios -->
						<div id="myModal_estado" class="modal fade" role="dialog">
						  <div  class="modal-dialog">
						    <!-- Modal content-->
						    <div  class="modal-content">
						      <div class="modal-header">
						        <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
						        <h4 class="modal-title" align="center" style="color:deepskyblue;" >Estado del becario</h4>
						      </div>
						      <div class="modal-body">
						        <font><b>Estado:</b><font style="color: grey;"> {{$becarios->estado}}</font></font><br>
						       	<font><b>Descripcion:</b> <br><font style="color: grey;">{{$becarios->descripcion}}</font></font>
						        <br>
						      </div>
						      <div class="modal-footer">
						      	<div align="left">
						      	    <font >Fecha de Actualizacion: <br><font style="color: grey;">{{$becarios->fecha_estado}}</font></font>
						      	</div>
						        <button type="button" class="btn" data-dismiss="modal">Close</button>
						      </div>
						    </div>
						  </div>
						</div>

						<div id="myProyecto" class="modal fade" role="dialog">
						  <div  class="modal-dialog">
						    <!-- Modal content-->
						    <div  class="modal-content">
						      <div class="modal-header">
						          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
						        <h4 class="modal-title" align="center" style="color:deepskyblue;" >Padre</h4>
						      </div>
						      <div class="modal-body">
						        <font><b>Nombre:</b><font style="color: grey;"> {{$becarios->nombre_padre}}</font></font><br>
						      	<font><b>Identidad:</b><font style="color: grey;"> {{$becarios->identidad_padre}}</font></font><br>
						      	<font><b>Telefono:</b><font style="color: grey;"> {{$becarios->telefono_padre}}</font></font><br>
						      	<font><b>Email:</b><font style="color: grey;"> {{$becarios->correo_padre}}</font></font><br>
						      	<font><b>Direccion:</b><font style="color: grey;"> {{$becarios->direccion_padre}}</font></font><br>
						      </div>
						      <div class="modal-footer" align="center">
						      	<div align="center">
						         <button type="button" class="btn" data-dismiss="modal">Close</button>
						      	</div>
						      </div>
						    </div>
						  </div>
						</div>

						<!--Ventana modal del Guia asignado -->
						<div id="myGuia" class="modal fade" role="dialog">
						  <div  class="modal-dialog">
						    <!-- Modal content-->
						    <div  class="modal-content">
						      <div class="modal-header">
						          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
						        <h4 class="modal-title" align="center" style="color:deepskyblue;" >Datos del Guía</h4>
						      </div>
						      <div class="modal-body">
						      	<!-- 
						      	<img src="{{asset('images/casa/calibri.jpg')}}" width="150px" style="border-radius: 45%"> 
						      	@if($becarios->images==null && $becarios->genero=="Masculino" )
									<a href="#" class="image"><img src="{{asset('images/masculino.jpg')}}" alt="Maculino" class="img-responsive img-rounded" width="100px" /></a>
								@elseif($becarios->images==null && $becarios->genero=="Femenino" )
									<a href="#" class="image"><img src="{{asset('images/femenino.jpg')}}" alt="Femenino" class="img-responsive img-rounded" width="100px" /></a> 
								@elseif($becarios->images!=null)
									<a href="#" class="image">
									<img src="/images/perfiles/{{ $becarios->images->name}}" alt="no encontro la imagen" class="img-responsive img-rounded" width="125px" /></a>
								@endif -->
						        <font><b>Nombre:</b><font style="color: grey;"> Luis Enrique Fonseca Tabora</font></font><br>
						      	<font><b>Identidad:</b><font style="color: grey;"> 0705199400130</font></font><br>
						      	<font><b>Telefono:</b><font style="color: grey;"> 99138307</font></font><br>
						      	<font><b>Email:</b><font style="color: grey;"> Luis@gmail.com</font></font><br>
						      	<font><b>Grupo:</b><font style="color: grey;"> G15</font></font><br>
						      	<font><b>Casa:</b><font style="color: grey;"> Colibrí</font></font><br>	
						      </div>
						      <div class="modal-footer">
						      	<div align="center">
						         <button type="button" class="btn" data-dismiss="modal">Close</button>
						      	</div>
						      </div>
						    </div>
						  </div>
						</div>

						<!--Ventana modal del Embajador asignado -->
						<div id="myEmbajador" class="modal fade" role="dialog">
						  <div  class="modal-dialog">
						    <!-- Modal content-->
						    <div  class="modal-content">
						      <div class="modal-header">
						          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
						        <h4 class="modal-title" align="center" style="color:deepskyblue;" >Datos del Embajador</h4>
						      </div>
						      <div class="modal-body">
						        <font><b>Nombre:</b><font style="color: grey;"> Luis Enrique Fonseca Tabora</font></font><br>
						      	<font><b>Identidad:</b><font style="color: grey;"> 0705199400130</font></font><br>
						      	<font><b>Telefono:</b><font style="color: grey;"> 99138307</font></font><br>
						      	<font><b>Email:</b><font style="color: grey;"> Luis@gmail.com</font></font><br>
						      	<font><b>Grupo:</b><font style="color: grey;"> G15</font></font><br>
						      </div>
						      <div class="modal-footer">
						      	<div align="center">
						         <button type="button" class="btn" data-dismiss="modal">Close</button>
						      	</div>
						      </div>
						    </div>
						  </div>
						</div>

						<!--Ventana modal de la casa asignado -->
						<div id="myCasa" class="modal fade" role="dialog">
						  <div  class="modal-dialog">
						    <!-- Modal content-->
						    <div  class="modal-content">
						      <div class="modal-header">
						          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
						        <h4 class="modal-title" align="center" style="color:deepskyblue;" >Datos de la Casa</h4>
						      </div>
						      <div class="modal-body">
						        <font><b>Nombre de la Casa:</b><font style="color: grey;"> JAGUAR</font></font><br>
						      	<font><b>Lema:</b><font style="color: grey;"> Vivir la vida.</font></font><br>
						      	<font><b>Numero de Embajadores:</b><font style="color: grey;"> 9</font></font><br>
						      	<font><b>Fotografia:</b><font style="color: grey;"> Fotografia</font></font><br>
						      	
						      </div>
						      <div class="modal-footer">
						      	<div align="center">
						         <button type="button" class="btn" data-dismiss="modal">Close</button>
						      	</div>
						      </div>
						    </div>
						  </div>
						</div>



















						<!--Ventana modal de la lista de los becarios de un guia -->
						<div id="myLista" class="modal fade" role="dialog">
						  <div  class="modal-dialog">
						    <!-- Modal content-->
						    <div  class="modal-content">
						      <div class="modal-header">
						          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
						        <h4 class="modal-title" align="center" style="color:deepskyblue;" >Guia: {{$becarios->nombre}}</h4>
						      </div>
						      <div class="modal-body">

						        
						        <table class="table table-hover table-striped">
     	<thead>
        <th  id="letra" style="text-align: center; color: deepskyblue;">Foto</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Nombre Completo</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Cargo</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Identidad</th>
       
             
     	</thead>
      <tbody id="table-content">
  
         	<tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/hombre/1.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>       

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Hernesto Valverde Montes Chicas
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Becario</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>	        		 
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/hombre/2.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Daniel Ochoa Corrales Fonseca
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Becario</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>070519540000</span>                                              
		              </td>		        	             
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/mujer/1.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Samanta Mariel Corrales Rubio
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Becario</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0801199700150</span>                                              
		              </td>
             
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/hombre/3.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Kevin Alexander Pavon Colindres
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Becario</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0201199000183</span>                                              
		              </td>
             
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/mujer/2.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Mariela Dilcia Moncada Rubio
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Becario</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/mujer/3.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Monica Robles Gonzales Valle
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Becario</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>253015553302</span>                                              
		              </td>
             
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/hombre/4.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Marvin Alexander Pavon Colindres
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Becario</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>
             
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/mujer/4.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Yoseline Yolany Oseguera Gonzales
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Becario</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>825312223363</span>                                              
		              </td>
             
            </tr>
      
        </tbody>           
  
  </table>

						      	
						      </div>
						      <div class="modal-footer">
						      	<div align="center">
						         <button type="button" class="btn" data-dismiss="modal">Close</button>
						      	</div>
						      </div>
						    </div>
						  </div>
						</div>



<!--------------------------------------------- ---------------------------------------------------------- -->





						<!--Ventana modal de la lista de los becarios de un guia -->
						<div id="myListaE" class="modal fade" role="dialog">
						  <div  class="modal-dialog">
						    <!-- Modal content-->
						    <div  class="modal-content">
						      <div class="modal-header">
						          <!--<button type="button" class="close" data-dismiss="modal">&times;</button>-->
						        <h4 class="modal-title" align="center" style="color:deepskyblue;" >Embajador: {{$becarios->nombre}} </h4>
						      </div>
						      <div class="modal-body">

						        
						        <table class="table table-hover table-striped">
     	<thead>
        <th  id="letra" style="text-align: center; color: deepskyblue;">Foto</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Nombre Completo</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Cargo</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Identidad</th>
       
             
     	</thead>
      <tbody id="table-content">
  
         	<tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/hombre/1.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>       

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Hernesto Valverde Montes Chicas
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Guia</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>	        		 
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/hombre/5.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Daniel Ochoa Corrales Fonseca
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Guia</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>070519540000</span>                                              
		              </td>		        	             
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/mujer/5.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Samanta Mariel Corrales Rubio
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Guia</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0801199700150</span>                                              
		              </td>
             
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/hombre/6.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Kevin Alexander Pavon Colindres
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Guia</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0201199000183</span>                                              
		              </td>
             
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/mujer/7.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Mariela Dilcia Moncada Rubio
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Guia</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/mujer/8.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Monica Robles Gonzales Valle
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Guia</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>253015553302</span>                                              
		              </td>
             
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/hombre/10.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Marvin Alexander Pavon Colindres
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Guia</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>
             
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/pic/mujer/10.jpg')}}" 
		                                    style=" 
		                                    height: 70px;
		                                    width: 70px;
		                                    /* los siguientes valores son independientes del tamaño del círculo */
		                                    background-repeat: no-repeat;
		                                    background-position: 50%;                                    
		                                    background-size: 100% auto;" 
		                          />
		                        </a>
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Yoseline Yolany Oseguera Gonzales
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Guia</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>825312223363</span>                                              
		              </td>
             
            </tr>
      
        </tbody>           
  
  </table>

<!-- -------------------------------------------------------------------------- -->						      	
						      </div>
						      <div class="modal-footer">
						      	<div align="center">
						         <button type="button" class="btn" data-dismiss="modal">Close</button>
						      	</div>
						      </div>
						    </div>
						  </div>
						</div>




















					</div>
				</div>
				
			@foreach($horas as $hora)
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 well">
						  <h3 align="center">Horas de 
						   
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
						  </h3>
						<div class="progress">
						  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" 
						       style="width: {{$hora->hora*5}}%">
						       {{$hora->hora}} horas
						    
						  </div>
						</div>
						<!--
						<h3 style="color: green;" align="center">{{$hora->hora}}</h3>
						-->
					</div>
				</div>
			@endforeach	


				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					</div><br>
				</div>
				<div class="row hidden-xs well">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div align="center">
						 <span><h3>Información del Becario</h3></span>
						</div>
						<section role="main" class="container_16 clearfix">
							<div class="grid_16">
								<!-- Formacion academica -->
								<div align="center" class="grid_8 apropos">
									<h3 >Universidad</h3>				
									<font size="5" id="grids">{{$becarios->universidad}} </font>
								</div>
								<!-- Informacion Adicional -->
								<div align="center" class="grid_8 apropos">
									<h3>Direccion</h3>
									<font size="5" id="grids">{{$becarios->direccion}}</font>
									<br>
									<br>
									<br>
								</div>
									<br>
									<br>
									<br>
								<!-- Formacion Profesional -->
								<div align="center" class="grid_8 apropos">
									<h3>Carrera</h3>				
									<font size="5" id="grids">{{$becarios->carrera}}</font>
									<br>
									<br>
									<br>
								</div>
									
								<!-- Contact -->
								<div align="center" class="grid_8 apropos">
									<h3>Contacto</h3>
									<ul>
										<font size="5" id="grids">{{$becarios->telefono}}</font> <br>
									    <font size="5" id="grids">{{$becarios->correo}}</font>
									</ul>
								</div>
							</div>
						</section>
					</div>
				</div>
                <br>
                <div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 well">
						<div align="center">
								<ul>
									<li><h3>Registro de Horas</h3></li>
									<font size="5"><li><a id="espaciados" href="{{route('becarios.indexVoluntariado',$becarios->id)}}"><font face="Comic Sans MS,arial,verdana" class="glyphicon glyphicon-time" size="5"> Horas de Compromiso Social Juvenil </font></a></li></font><br>
									<font size="5"><li><a id="espaciados" href="{{route('voluntariado.show',$becarios->id)}}"><font face="Comic Sans MS,arial,verdana" class="glyphicon glyphicon-dashboard" size="5"> Horas de Actividades o Talleres </font></a></li></font><br>
									<font size="5"><li><a id="espaciados" href="{{route('Becarios.mostrar_horas',$becarios->id)}}"><font face="Comic Sans MS,arial,verdana" class="glyphicon glyphicon-tasks" size="5"> Historial de Horas </font></a></li></font>
									
								</ul>
							</div>
					</div>
				</div>


				<br>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 well">
						<footer class="ariel">
							<div align="center">
								<ul>
									<li><h3>Documentos del Becario</h3></li>
									<font size="5"><li><a id="espaciados" href="{{route('Becarios.index-forma03',$becarios->id)}}"><font face="Comic Sans MS,arial,verdana" class="glyphicon glyphicon-folder-open" size="5" > Identidad </font></a></li></font><br>
									<font size="5"><li><a href="{{route('Becarios.index-document',$becarios->id)}}"><font id="espaciados" class="glyphicon glyphicon-folder-open" size="5"> Documentación </font></a></li></font><br><br>
									
								</ul>
							</div>
							
						</footer>
					</div>
				</div>
			</div>
		</div>            
	</header>

	

	
@endsection