@extends('layouts.main')
@section('seccion')
    <div class="container-fluid">

        <!--  Titulo Mis datos personales -->
        <div class="row justify-content-center">
            <div class="col-4"></div>
            <div class="col-4 space_title color_texto">Modificar datos personales</div>
        </div>
 
        <!-- cuadrados -->
        <div class="row">
            <!-- Mi perfil -->
            <div class="col-4">
                <div class="container-fluid ventana_p">
                    
                    <form class="form_perfil">
                        <h4 class="card-titl text-center">Mi perfil</h4>

                        <ul class="nav flex-column padding_buttons">
                            <li class="nav-item">
                                <a class="nav-link active color7" aria-current="page" href="/perfil_datosActuales">Mis datos personales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active color7" aria-current="page" href="/perfil_datosPersonales">Modificar datos personales</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color7" aria-current="page" href="/perfil_modificarContraseña">Modificar contraseña</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color7" aria-current="page" href="/perfil_cuentaBancaria">Mi cuenta bancaria</a>
                            </li>
                        </ul>
                    </form>
                    

                </div>
            </div>

            <!-- Datos Personales -->
            <div class="col-8">
                <div class="container-fluid ventana_dp">
                <form action="{{url('user/update')}}/{{Auth::user()->id }}" method="POST">
                        @csrf @method('PUT')
                        <div class="col-12 padding_text">
                            <label  class="form-label">Nombre completo *</label>
                            <input id="name" name="name" type="text" class="form-control @error('name') is-invalid @enderror" autocomplete="name" required="" value="{{Auth::user()->name }}">
                        </div>
                        <div class="col-12 padding_text">
                            <label class="form-label">Numero de telefono *</label>
                            <input id="telefono" name="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror"  required="" value = "{{Auth::user()->telefono }}">
                        </div>
                        
                        <div class="row padding_text">

                            <div class="col-12">
                                <label class="form-label">Rol *</label>
                                <input type="text" class="form-control" id="" disabled placeholder="{{Auth::user()->rol }}">
                            </div>
                        </div>
                        
                        <div class="col-12 padding_text">
                            <label for="inputEmail" class="form-label">Correo electrónico *</label>
                            <input type="email" id="email" name="email"  value="{{Auth::user()->email }}" class="form-control @error('email') is-invalid @enderror" required="" autocomplete="email">
                        </div>

                        
                        <div class="col-12 padding_buttons">
                            <button type="submit" class="btn btn-default color1 btn-lg">Guardar</button>
                        </div>  
                    </form>

                </div>
            </div>

        </div>
    </div>
    

<!--CSS
estilo de colores (pude ser HEX)   ej #FFFFFF 
    -->
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

    .color7{
        background-color:#A7C957;
        color: black;
    }

    .color_texto{
        color: green;
    }

    .space_title{  
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 35px;
        line-height: 47px;
        padding: 20px;
    }

    .ventana_dp{
        width: 930px;
        height: 550px;
        left: 493px;
        top: 150px;

        background: #F2E8CF;
        border-radius: 39px;
    }

    .ventana_p{
        width: 400px;
        height: 250px;
        left: 50px;
        top: 150px;

        background: #A7C957;
        border-radius: 39px;
    }

    .form-personal {
        width: 100%;
        max-width: 630px;
        padding: 10px;
        margin: 0 auto;
    }

    .form_perfil{
        width: 100%;
        max-width: 730px;
        padding: 30px;
        margin: 0 auto;
    }
    .padding_text{
        padding: 10px;
    }

    .padding_buttons{
        padding: 15px;
    }
 </style> 

 @endsection