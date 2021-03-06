@extends('layouts.main')

@section('seccion')
<div class="row text-center">
        <div class="col">
        </div>
    
        <div class="col text-center ">
            <div class="container-fluid ventana">
                <a href="/"><img src="https://i.ibb.co/RQKpgvv/logo.png" alt="logo" ></a>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <article class="card-body mx-auto" style="max-width: 400px;">
                        <h4 class="card-title text-center">Crear cuenta</h4>

                            
                            <!--Nombre del usuario OK-->
                            <div class="form-group input-group">
                                
                                    <input id="name" placeholder="Nombre Completo" type="text" class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                
                            </div>
    
                            <div class="form-group input-group rounded-pill">
                                <select id="rol" class="form-control rounded-pill @error('rol') is-invalid @enderror" name="rol" value="{{ old('rol') }}" placeholder="Seleccionar tipo de usuario" required="" autocomplete="rol">
                                    <option hidden selected disabled value="">Selecciona un rol </option>
                                    <option>Cliente</option>
                                    <option>Feriante</option>
                                </select>
                            </div> 

                            <div class="form-group input-group">
                                <input id="telefono" name="telefono" class="form-control rounded-pill @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" placeholder="Número teléfono" type="text">
                            </div>
                            
                            <div class="form-group input-group">

                                    <input id="email" type="email" placeholder="Correo electrónico" class="form-control rounded-pill @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                             
                            </div>                            
                        <!--Contraseña-->
                        <div class="form-group input-group">
                       
                                <input id="password" type="password" placeholder="Contraseña" class="form-control rounded-pill @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           
                        </div>

                        <!--Password confirm-->
                        <div class="form-group input-group">
                          
                                <input id="password-confirm" placeholder="Repetir contraseña" type="password" class="form-control rounded-pill" name="password_confirmation" required autocomplete="new-password">
                           
                        </div>

                            <!--Botón de registrar-->
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-lg color4 rounded-pill text-center">
                                    {{ __('Crear cuenta') }}
                                </button>
                            </div>      

                            <!--Footer-->
                            <p class="text-center">¿Ya tienes cuenta?  <a href="/login">Inicia sesión aquí</a> </p>                                      
                                            
                    <div class = "end-100 bottom text-center padding_up">
                        <p class="padding_up text-muted ">FERION - Ferias Online - 2021</p>
                    </div> 
                    </article>
                </form>
            </div>
    
        </div>
    
        <div class="col">
        </div>
    
    </div>
<script language='javascript' type='text/javascript'>
    function check(input) {
    if (input.value != document.getElementById('password').value) {
        input.setCustomValidity('No coinciden');
    } else {
        // input is valid -- reset the error message
        input.setCustomValidity('');
    }
    }
</script>

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
