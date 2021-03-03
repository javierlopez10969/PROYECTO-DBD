@extends('layouts.main')

@section('seccion')
    <div class="row">
        <div class="col">
        </div>

        <div class="col text-center ">
            <div class="container-fluid ventana">
                <a href="/"><img src="https://i.ibb.co/RQKpgvv/logo.png" alt="logo" ></a>

                <form class="form-signin">
                    
                    <article class="card-body mx-auto" style="max-width: 400px;">
                        
                        <h4 class="card-title text-center">Crear cuenta</h4>
                        <form>
                            <div class="form-group input-group">
                                <input name="" class="form-control rounded-pill" placeholder="Nombre" type="text" required="">
                            </div> 
                            <div class="form-group input-group">
                                <input name="" class="form-control rounded-pill" placeholder="Correo electrónico" type="email" required="">
                            </div> 
                            <div class="form-group input-group">
                                <select class="custom-select rounded-pill" style="max-width: 120px;">
                                    <option selected="">+569</option>
                                    <option value="1">+562</option>
                                </select>
                                <input name="" class="form-control rounded-pill" placeholder="Número teléfono" type="text">
                            </div> 
                            <div class="form-group input-group rounded-pill">
                                <select class="form-control rounded-pill " placeholder="Seleccionar tipo de usuario" required="">
                                    <option>Cliente</option>
                                    <option>Feriante</option>
                                </select>
                            </div> 
                            <div class="form-group input-group">
                                <input class="form-control rounded-pill" placeholder="Contraseña" type="password" required="" id="password">
                            </div> 
                            <div class="form-group input-group">
                                <input class="form-control rounded-pill" placeholder="Repetir contraseña" type="password" required="" oninput="check(this)">
                            </div>                                      
                            <div class="form-group text-center">
                                <button class="btn btn-lg color4 rounded-pill" type="submit">Crear cuenta</button>
                            </div>       
                            <p class="text-center">¿Ya tienes cuenta?  <a href="/login">Inicia sesión aquí</a> </p>                                                                 
                        </form>
                        <div class = "end-100 bottom text-center padding_up">
                            <p class="padding_up text-muted ">FERION - Ferias Online - 2021</p>
                        </div> 
                    </article>
                </form>
            </div> <!-- card.// -->

        </div>

        <div class="col">
        </div>

    </div><!--  Row -->

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
            align-items: center;
            -webkit-box-pack: center;
            justify-content: center;        
            padding-top: 40px;
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