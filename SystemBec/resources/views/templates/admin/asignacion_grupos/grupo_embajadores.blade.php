@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Agregar Embajador al Guia
@endsection

	<h3><b>Cargo: </b> {{$becarios->cargo}}<br></h3>
				<h3>{{$becarios->nombre}} <br></h3>

   
   			<div align="center">
   				<h1 style="color: green;">Selecione un Embajador Por favor</h1>
   				<br>
   			</div>
<table class="table table-hover table-striped">
     	<thead>
        <th  id="letra" style="text-align: center; color: deepskyblue;">Foto</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Nombre Completo</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Cargo</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Identidad</th>
        <TH id="letra" style="text-align: center; color: deepskyblue;">Casa</TH>
             
     	</thead>
      <tbody id="table-content">
  
         	<tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
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
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Hernesto Valverde Montes Chicas
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Embajador</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>

		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <br><br>Guacamaya  
		              </td>
             
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
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
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Hernesto Valverde Montes Chicas
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Embajador</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>

		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <br><br>Guacamaya  
		              </td>
             
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
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
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Hernesto Valverde Montes Chicas
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Embajador</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>

		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <br><br>Guacamaya  
		              </td>
             
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
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
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Hernesto Valverde Montes Chicas
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Embajador</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>

		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <br><br>Guacamaya  
		              </td>
             
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
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
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Hernesto Valverde Montes Chicas
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Embajador</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>

		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <br><br>Guacamaya  
		              </td>
             
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/Femenino.jpg')}}" 
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
		                   <span ><br><br>Embajador</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>253015553302</span>                                              
		              </td>

		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <br><br>Venado 
		              </td>
             
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
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
		           

		             
		            <!--Datos restantes del formulario: Nombre, cargo, identidad, universidad. -->  
		    			  </td>
		        		
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                <br><br>Hernesto Valverde Montes Chicas
		              </td>        		
		              <td style="color: rgb(150, 156, 156  ); text-align: center;">            
		                   <span ><br><br>Embajador</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>0705199400130</span>                                              
		              </td>

		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <br><br>Guacamaya  
		              </td>
             
            </tr>
            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/femenino.jpg')}}" 
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
		                   <span ><br><br>Embajador</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <span ><br><br>825312223363</span>                                              
		              </td>

		        		  <td style="color: rgb(150, 156, 156  ); text-align: center;">
		                   <br><br>Colibrí 
		              </td>
             
            </tr>
      
        </tbody>           
  
  </table>






<div  class="row">
<div class="col-md-3">

      {!! Form::open(['route' => ['Becarios.asignar_guia.update',$becarios], 'method'=>'PUT']) !!}

	     <div class="form-group">
	   		{!! Form::submit('Asignar',['class'=>'btn btn-primary']) !!}
	   </div>

	</div>						
</div>












@endsection