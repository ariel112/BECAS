@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Agregar Casa al Embajador
@endsection

	<h3><b>Cargo: </b> {{$becarios->cargo}}<br></h3>
				<h3>{{$becarios->nombre}} <br></h3>

   
   			<div align="center">
   				<h1 style="color: green;">Selecione una Casa Por favor</h1>
   				<br>
   			</div>
<table class="table table-hover table-striped">
     	<thead>
        <th  id="letra" style="text-align: center; color: deepskyblue;">Foto</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Nombre de la Casa</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Lema</th>
        <th id="letra" style="text-align: center; color: deepskyblue;">Numero de Embajadores</th>
              
     	</thead>
      <tbody id="table-content">
  
         	<tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/casa/calibri.jpg')}}" 
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

		        		  <td style="color: rgb(150, 156, 156); text-align: center;">
		                <br><br>Venado
		              </td>        		
		              <td style="color: rgb(150, 156, 156); text-align: center;">            
		                   <span ><br><br>Siempre al tanto</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156); text-align: center;">
		                   <span ><br><br>200</span>                                              
		              </td>

		        		  
             
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/casa/guacamaya.jpg')}}" 
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
		    				        		
		        		  <td style="color: rgb(150, 156, 156); text-align: center;">
		                <br><br>Guacamaya
		              </td>        		
		              <td style="color: rgb(150, 156, 156); text-align: center;">            
		                   <span ><br><br>Siempre al tanto</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156); text-align: center;">
		                   <span ><br><br>200</span>                                              
		              </td>

		        		 
             
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/casa/calibri.jpg')}}" 
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
		    				        		
		        		  <td style="color: rgb(150, 156, 156); text-align: center;">
		                <br><br>Colibrí
		              </td>        		
		              <td style="color: rgb(150, 156, 156); text-align: center;">            
		                   <span ><br><br>Siempre al tanto</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156); text-align: center;">
		                   <span ><br><br>200</span>                                              
		              </td>

		        		 
             
            </tr>

            <tr>

		            <td style="text-align: center;"> 
		        		  <!--Condicion para colocar la imagen segun su genero -->      
		            
		                        
		                        <a href="#"  class="image">
		                          <img id="perfil" src="{{asset('images/casa/jaguar.jpg')}}" 
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
		    				        		
		        		  <td style="color: rgb(150, 156, 156); text-align: center;">
		                <br><br>Jaguar
		              </td>        		
		              <td style="color: rgb(150, 156, 156); text-align: center;">            
		                   <span ><br><br>Siempre al tanto</span>                 
		              </td>
		        		  <td style="color: rgb(150, 156, 156); text-align: center;">
		                   <span ><br><br>200</span>                                              
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