@extends('layouts.app')

@section('content')

   <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">

                <div class="text-center login100-form-title ">
                    <h1 style="color: #5416e45e;">SYSTEMBEC</h1>
                    <hr>
                </div>

                <div class="login100-pic js-tilt" data-tilt>
                    <br>
                    <img src="{{asset('images/img-01.png')}}" alt="IMG">
                </div>

  <form class="login100-form validate-form" method="POST" action="{{route('login') }}">
                                {{ csrf_field() }}


                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">                
                    <span class="login100-form-title">
                        Iniciar sesión
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Se requiere un correo electronico válido: ex@abc.xyz">
                        <input class="input100" type="text" name="email" placeholder="Correo" value="{{ old('email') }}" >
                         @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>

                </div>  

                     <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <div class="wrap-input100 validate-input" data-validate = "La contraseña es requerida">                     
                        <input class="input100" type="password" name="password" placeholder="Contraseña">
                         @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Iniciar Sesión
                        </button>
                    </div>

                    <div class="text-center p-t-5">
                        <span class="txt1">
                            Olvidaste tu <br>
                        </span>
                        <a class="txt2" href="#">
                            Usuario / Contraseña?
                        </a>
                    </div>

                    <div class="text-center p-t-50">
                        <a class="txt2" href="{{ route('register') }}">">
                            Crear cuenta
                            <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                        </a>
                    </div>
                </form>

    
<!-- inicia-->
     <div class="container">
        <div class="col-sm-6 col-sm-offset-3 social-login">
            <h3>Puedes encontrarnos en:</h3>
            <div class="social-login-buttons">
                <a class="btn btn-link-2" href="https://www.facebook.com/BecasHonduras2020/">
                    <i class="fa fa-facebook"></i> Facebook
                </a>
                <a class="btn btn-link-2" href="https://twitter.com/becashn2020">
                    <i class="fa fa-twitter"></i> Twitter
                </a>                                
                <a class="btn btn-link-2" href="https://www.instagram.com/becashonduras2020/">
                    <i class="fa fa-instagram"></i> Instagram
                </a>                
            </div>
        </div>
    </div>
<!--termina -->

            </div>
        </div>
    </div>


@endsection
