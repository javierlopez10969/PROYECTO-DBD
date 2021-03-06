@extends('layouts.main')
@section('seccion')
    <div class="container-fluid">


        <!--  Titulo Modificar contraseña -->
        <div class="row justify-content-center">
            <div class="col-4"></div>
            <div class="col-4 space_title color_texto">Modificar contraseña</div>
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
                                <a class="nav-link color7" aria-current="page" href="/perfil_cuentaBancaria">Modificar cuenta bancaria</a>
                            </li>
                        </ul>
                    </form>

                </div>
            </div>

            <!-- Modificar contraseña -->
            <div class="col-8">
                <div class="container-fluid ventana_mc">
                    <form class="form-password">

                        <div class="col-12 padding_text">
                            <label for="inputPassword" class="form-label">Contraseña actual</label>
                            <input class="form-control" type="password" required="" id="inputPassword">                      
                        </div>
                        <div class="col-12 padding_text">
                            <label for="inputPassword" class="form-label">Nueva contraseña</label>
                            <input class="form-control" type="password" required="" id="password" oninput="check_p(this)">
                        </div> 
                        <div class="col-12 padding_text">
                            <label for="inputPassword" class="form-label">Repetir nueva contraseña</label>
                            <input class="form-control" type="password" required="" oninput="check(this)"> 
                        </div>
                        <div class="col-12" style="padding: 50px;">
                            <button type="button" class="btn btn-secondary btn-lg">Volver al menú</button>
                            <button type="submit" class="btn btn-primary btn-lg">Guardar</button>
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

    .ventana_mc{
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

    .form-password{
        width: 100%;
        max-width: 630px;
        padding: 50px;
        margin: 0 auto;
    }

    .form_perfil{
        width: 100%;
        max-width: 730px;
        padding: 30px;
        margin: 0 auto;
    }
    .padding_text{
        padding: 20px;
    }

    .padding_buttons{
        padding: 15px;
    }

 </style> 

<!-- Javascript para verificar si al ingresar la nueva contraseña, estas sean distintas-->
<script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Las contraseñas no coinciden');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>

<!-- Javascript para verificar si al ingresar la contraseña actual y la nueva contraseña, estas sean distintas-->
<script language='javascript' type='text/javascript'>
    function check_p(input) {
        if (input.value == document.getElementById('inputPassword').value) {
            input.setCustomValidity('La contraseña actual debe ser distinta a la nueva contraseña');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>

@endsection
