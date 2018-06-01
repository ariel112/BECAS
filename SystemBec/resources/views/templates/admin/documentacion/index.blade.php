@extends('templates.main')

@section('content')



<!-- Header -->
								

								
@section('subtitle')
Acualización Documentación
@endsection



	<div align="center">
		<!--boton para la forma03-->
		<a id="espaciados" style=" text-decoration: none; text-decoration-line: none;" href="{{route('Becarios.index-document-CREATE',$becarios->id)}}"><font  class="glyphicon glyphicon-folder-open" size="4"> Actualizar Documentos </font></a>
	</div>
						
    <br>

    @foreach ($becarios->doc_periodos as $document)
   
    <br>
  				
	   		<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 well">
						<div align="center">
								<ul>
									<h2>{{$document->nombre_periodo}} {{$document->created_at->format('Y')}}</h2>
									<li style="list-style:none;"><b>Promedio Global: </b>{{$document->prom_global}}</li>
									<br>
									<li style="list-style:none;"><b>Promedio del Periodo: </b>{{$document->prom_periodo}}</li>
									 <br>
									
									<li style="list-style:none;">
										<a style="text-decoration:none" href="/document/historial/{{$document->nombre_historial}}" download="Historial Academico">
											<img width="40" height="40" src="{{asset('images/pdf.png')}}" alt="Historial Academico" />								
									        Historial Academico
										</a><br>
										 <br>
								    </li>

								    <li style="list-style:none;">
										<a style="text-decoration:none" href="/document/forma03/{{$document->nombre_forma03}}" download="Forma03">
											<img width="40" height="40" src="{{asset('images/pdf.png')}}" alt="Forma03" />										
										    Forma03
										</a>
								    </li>									
								</ul>
						</div>
					</div>
			</div>


	 @endforeach


				
		

@endsection