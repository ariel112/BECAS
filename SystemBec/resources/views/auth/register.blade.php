

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--
    <title>{{ config('app.name', 'SYSTEMBEC') }}</title>
    -->
    <title>SYSTEMBEC COSAS</title>
   <!-- Styles -->
   
    <!--Login hecho por mi
   

        <!-- Favicon and touch icons -->
        <link rel="icon" type="image/png" href="{{asset('images/icon/beca.jpg')}}" />

      


    <meta name="viewport" content="width=device-width, initial-scale=1">





<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fonts/iconic/css/material-design-iconic-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/vendor/animate/animate.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/css/main.css')}}">

















</head>
<body>


<div class="limiter">
        <div class="container-login100">
            <div class="login100-more" style="background-image: url('{{asset('images/bg-01.jpg')}}'); "></div>
               
            <div class="wrap-login100 p-l-50 p-r-50 p-t-10 p-b-10">


                <form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
                     {{ csrf_field() }}

                    <span class="login100-form-title p-b-59" >
                        Regístrate
                    </span>

                    <div class="wrap-input100 validate-input" data-validate="El nombre es requerido">
                        <span class="label-input100">Nombre Completo</span>
                        <input class="input100" type="text" name="name" placeholder="Nombre..." >

                        <span class="focus-input100"></span>
                    </div>



                    <div class="wrap-input100 validate-input" data-validate = "Se requiere un correo electrónico válido: ex@abc.xyz">
                        <span class="label-input100">Correo Electrónico</span>
                        <input class="input100" type="text" name="email" placeholder="Correo..." value="{{ old('email') }}" >

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        <span class="focus-input100"></span>
                    </div>




                    <div class="wrap-input100 validate-input" data-validate = "Contraseña requerida">
                        <span class="label-input100">Contraseña</span>
                        <input class="input100" type="text" name="password" placeholder="*************" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        <span class="focus-input100"></span>
                    </div>



                    <div class="wrap-input100 validate-input" data-validate = "Debe repetir la contraseña">
                        <span class="label-input100">Repita su Contraseña</span>
                        <input class="input100" id="password-confirm" type="text"  name="password_confirmation" placeholder="*************">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button type="submit" class="login100-form-btn">
                                Regístrate
                            </button>
                        </div>

                        
                    </div>


                </form>
            </div>
        </div>
    </div>
    <!--===============================================================================================-->  
    <script src="{{asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/tilt/tilt.jquery.min.js')}}"></script>
    <script >
        $('.js-tilt').tilt({
            scale: 1.1
        })
    </script>

    <!--===============================================================================================-->
    <script src="{{asset('js/main.js')}}"></script>
    

<!--===============================================================================================-->
    <script src="{{asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->

<!--===============================================================================================-->
    
<!--===============================================================================================-->
    <script src="{{asset('vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('vendor/countdowntime/countdowntime.js')}}"></script>


</body>
</html>












