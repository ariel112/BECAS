

@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Estadísticas del las Casas
@endsection




<div class="row ">
	<div class="col-lg-6 well">
    	<h1>Casa Guacamaya</h1>
       	<a href="#" class="image"><img width="650px" height="400px" src="{{asset('images/guacamaya.png')}}" alt="" /></a><br><br><br>
	</div>
		
	<div class="col-lg-6 well">
       	 <h1>Casa Jaguar</h1>
        <a href="#" class="image"><img width="650px" height="400px" src="{{asset('images/jaguar.png')}}" alt="" /></a><br><br><br>
	</div>

	<div class="col-lg-6 well">
    	 <h1>Casa Venado</h1>
         <a href="#" class="image"><img width="650px" height="400px" src="{{asset('images/Venado.png')}}" alt="" /></a><br><br><br>
	</div>
	
	<div class="col-lg-6 well">
    	<h1>Casa Colibrí</h1>
        <a href="#" class="image"><img width="650px" height="400px" src="{{asset('images/colibri.png')}}" alt="" /></a><br><br><br>
	</div>                  
</div>

				

                                
 


@endsection


