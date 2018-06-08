@extends('layouts.app')

@section('content')

<div class="top-content">  
<div class="inner-bg">
<div class="container">

    <div class="row">
        <div class="col-sm-8 col-sm-offset-2 text">
            <h1><strong>SYSTEMBEC CAMBIO</strong> </h1>
            <div class="description">
                <p>
                    Sistema para el control de becarios 
                </p>
            </div>
        </div>
    </div>         
         <div class="row">                                       
         <div class="col-sm-6 col-sm-offset-3 form-box">                                        
                                        <div class="form-top">
                                                <div class="form-top-left">
                                                    <h3>Login</h3>
                                                    <p>Ingresa tu cuenta de usuario y contraseña para iniciar sesion.</p>
                                                </div>
                                                <div class="form-top-right">
                                                    <i class="fa fa-lock"></i>
                                                </div>
                                        </div>
             <div class="form-bottom">
  
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                
                                    <div class="col-md-12">
                                        <input id="text" type="email" placeholder="E-Mail Address" class="form-username form-control" name="email" value="{{ old('email') }}" required autofocus>

                                         @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    
                                    <div class="col-md-12">
                                        <input id="password" placeholder="Passwords" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <!--
                                <div class="form-group">
                                    <div class="col-md-12 ">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>Recordar contraseña
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                -->
                                    <div  class="form-group">
                                        <div class="col-md-12 ">
                                            <button type="submit" class="btn btn-primary">
                                                Iniciar
                                            </button>
                                        <!--    
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                Olvidaste tu contraseña?
                                            </a>
                                        -->
                                        </div>
                                    </div>

                            </form>
                        </div>


            </div>            
            
        </div>
        </div>



    <div class="row">
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


</div>
</div>
</div>
@endsection
