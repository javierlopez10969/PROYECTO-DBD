@extends('layouts.main')

@section('seccion')
<div >
    <div class="row">
        <div class="col">
        </div>
        <div class="col">
            <div class="container-fluid ventana text-center">
                <a href="/"><img src="https://i.ibb.co/RQKpgvv/logo.png" alt="logo" ></a>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <article class="card-body mx-auto" style="max-width: 400px;">
                    <h4 class="card-titl text-center">Iniciar sesión</h4>

                    <div class="form-group input-group">

                            <input id="email" type="email" placeholder="Correo electrónico"  class="form-control  rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    
                    </div>


                    <label for="inputPassword" class="sr-only">Contraseña</label>

                    <div class="form-group input-group">

                            <input id="password" type="password" placeholder="Contraseña" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                      
                    </div>
                    <div class="form-group input-group text-center">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Recordarme en este equipo') }}
                                </label>
                            </div>
                    </div>

                    <button type="submit" class="btn btn-lg color4 rounded-pill">
                        {{ __('Ingresar') }}
                    </button>
                </article>
                </form>
                <p class="text-center mt-lg-5">¿No tienes Cuenta?  <a href="/register">Registrate aquí</a> </p>  

                <div class = "end-100 bottom">
                    <p class="padding_up text-muted ">FERION - Ferias Online - 2021</p>
                </div>        
            </div>   
        </div>

        <div class="col">
        </div>
      </div>
</div>
<style>
    .color1{
        background-color:#A7C957;  
        color:white;
    }
    
    .color2{
        background-color:#F2E8CF;
        color:black;
    }
    .color3{
        background-color : #386641;
        color : white;
    }
    .color4{
        background-color:  #6A994E;
        color : white;
    }
    .color5{
        background-color: #BC4749;
        color : black;
    }
    .color6{
        color: blue;
    }
    
    .divider-text {
        position: relative;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .divider-text span {
        padding: 7px;
        font-size: 12px;
        position: relative;   
        z-index: 2;
    }
    .divider-text:after {
        content: "";
        position: absolute;
        width: 100%;
        border-bottom: 1px solid #ddd;
        top: 55%;
        left: 0;
        z-index: 1;
    }
    
    html,
    body {
        height: 100%;
    }
    body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        -webkit-box-pack: center;
        justify-content: center;     
        padding-bottom: 40px;
        background: linear-gradient(0deg, #A7C957 -12.51%, rgba(255, 255, 255, 0) 85.81%), #F9F6F7;        
        background-repeat: repeat-y;
    }
    
    .ventana{
        width: 540.93px;
        height: 693px;
        left: 482px;
        top: 26px;
    
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
    }
    .padding_up{
        padding-top: 15px;
    }
    .margin-l{
        margin-left: 51px;
    }
</style>
@endsection
