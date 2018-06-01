@extends('templates.main')

@section('content')



         <script  src="{{asset('plugins/js-camara/bootstrap.min.js')}}"></script>
         <script  src="{{asset('plugins/js-camara/bootstrap.min.css')}}"></script>
         <script  src="{{asset('plugins/js-camara/jquery.min.js')}}"></script>
         <script  src="{{asset('plugins/js-camara/npm.js')}}"></script>
<!--
        
<link rel="stylesheet" type="text/css" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">

 Header -->
						

								
@section('subtitle')
Tomar Foto
@endsection

    <div align="center">
      <video id="video" style="width: 450px; height: 340px; border-radius: 5px;"></video><br>
      <button id="startbutton" class="btn btn-info">Tomar Foto</button>
    </div>
    <canvas id="canvas"></canvas>
    <div align="center">
      <br><br>

      <img src="261.jpg" id="photo" alt="photo" style="width: 450px; height: 340px; border-radius: 5px;"> 
    
      <br>
    {!! Form::open(['route' => ['Becarios.fotoTomada',$becarios->becario_id], 'method'=>'POST']) !!}
     <textarea style="visibility: hidden;" name="base64" id="base64"></textarea>
     <input style="visibility: hidden;" type="text" name="becario_id" value="{{$becarios->id}} ">
    {!! Form::submit('Guardar Foto',['class'=>'btn btn-info', 'id'=>'btnInfo']) !!}
          
    </div>
    <br><div id="contenido"></div>

  <style type="text/css">
      #canvas{
        display: none;
             }
  </style>





   <script type="text/javascript">
    var imagen = "";
    (function() {

      var streaming    = false,
          video        = document.querySelector('#video'),
          canvas       = document.querySelector('#canvas'),
          photo        = document.querySelector('#photo'),
          startbutton  = document.querySelector('#startbutton'),
          width      = 320,
          height     = 0;

      navigator.getMedia = ( navigator.getUserMedia ||
                             navigator.webkitGetUserMedia ||
                             navigator.mozGetUserMedia ||
                             navigator.msGetUserMedia);

      navigator.getMedia(
        {
          video: true,
          audio: false
        },
        function(stream) {
          if (navigator.mozGetUserMedia) {
            video.mozSrcObject = stream;
          } else {
            var vendorURL = window.URL || window.webkitURL;
            video.src = vendorURL.createObjectURL(stream);
          }
          video.play();
        },
        function(err) {
          console.log("An error occured! " + err);
        }
      );

      video.addEventListener('canplay', function(ev){
        if (!streaming) {
          height = video.videoHeight / (video.videoWidth/width);
          video.setAttribute('width', width);
          video.setAttribute('height', height);
          canvas.setAttribute('width', width);
          canvas.setAttribute('height', height);
          streaming = true;
        }
      }, false);

      function takepicture() {
        canvas.width = width;
        canvas.height = height;
        canvas.getContext('2d').drawImage(video, 0, 0, width, height);
        var data = canvas.toDataURL('image/png');
        imagen = canvas.toDataURL('image/png');

        

        photo.setAttribute('src', data);
      }

      startbutton.addEventListener('click', function(ev){
          takepicture();
          document.getElementById('base64').value=imagen;
        ev.preventDefault();
        //alert("Foto Tomada");
      }, false);

    })();

    function ModificarDiv(){
      document.getElementById("contenido").innerHTML = imagen;
    }
  </script>


@endsection