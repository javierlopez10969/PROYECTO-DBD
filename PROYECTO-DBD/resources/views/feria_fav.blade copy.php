<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Favoritos</title>
    <!-- Roboto  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="text-center">
    <div class="container-fluid">

        <!-- barra superior -->
        <div class="row color1">

            <nav class="navbar navbar-expand-sm navbar-dark color1">
                <!-- Brand/logo -->
                <a class="col navbar-brand" href="#">
                    <img src="https://i.ibb.co/JcL3ghH/logo.png" onClick="window.location.reload();" alt="" height="40">
                </a>
                
                <div class="navbar-collapse collapse">
                    <div class="col-sm text-center padding-text color7">
                        <h1> Mis Favoritos </h1>
                    </div>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <!-- Boton Iniciar Sesion -->
                    <div class="col-sm button">
                        <a class="btn btn-default color2 rounded-pill" style="width: 100px;"  href="/perfil_datosPersonales" role="button">Perfil</a>
                        
                    </div>
                    <!-- Boton Registrarse -->
                    <div class="col-sm button" style="width: 150px;">
                        <a class="btn btn-default color2 rounded-pill" href="/" role="button">Cerrar sesion</a>
                    </div>

                </ul>

            </nav>
            
        </div>

        <!-- barra productos -->
        <div class="row">
            <div class="col border border-dark centrado">
                <h5 > Frutas </h5>
            </div>  

            <div class="col border border-dark centrado">
                <h5 > Verduras </h5>
            </div>  
            <div class="col border border-dark centrado">
                <h5 > Pollo </h5>
            </div>

            <div class="col border border-dark centrado">
                <h5> Carne y Pescado </h5>
            </div>

            <div class="col border border-dark centrado">
                <h5> Huevos </h5> 
            </div>

            <div class="col border border-dark centrado">
                <h5> Productos higiénicos </h5>
            </div>  
            <div class="col border border-dark centrado">
                <h5> Comida para mascotas </h5>
            </div>

            <div class="col border border-dark centrado">
                <h5> Otros </h5>
            </div>
        </div>

        <!-- Titulo Feriantes favoritos -->
        <div class="row justify-content-center">
            <div class="col-4"></div>
            <div class="col-4 space_title color_texto">Ferias favoritas</div>
        </div>

        <!-- Cuadrados -->
        <div class="row">

            <!-- Cuadrado Favoritos -->
            <div class="col-4">
                <div class="container-fluid ventana_favoritos">
                    
                    <form class="form_fav">
                        <!-- Primera linea -->
                        <h4 class="card-titl text-center">Mi favoritos</h4>

                        <ul class="nav flex-column" style="padding: 15px">
                            <!-- Boton de Feriantes -->
                            <li class="nav-item">
                                <a class="nav-link active color7" aria-current="page" href="/feriante_fav">Feriantes favoritos</a>
                            </li>
                            <!-- Boton de Ferias -->
                            <li class="nav-item">
                                <a class="nav-link color7" aria-current="page" href="/feria_fav">Ferias favoritas</a>
                            </li>
                        </ul>
                    </form>
                </div>
            </div>
            <!-- Tabla con la Lista de Feriantes -->
            <div class="col-4">
                <!--<div class="row" style="padding: 130px">-->
                <div class="row">
                    <div class="container-fluid ventana_ferias">
                        <div class="row">
                            <div class="col titulo_ferias text-start"> TABLA HECHA EN FUERZA BRUTA NO SE SI CONTIENE DATOS </div>
                            <table class="table">
                                <thead>
                                    <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First</th>
                                    <th scope="col">Last</th>
                                    <th scope="col">Handle</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                    </tr>
                                    <tr>
                                    <th scope="row">3</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Boton de Ferias -->
                <div class="row" style="padding: 30px">
                    <div class="col">
                        <a class="btn btn-secondary btn-lg" href="/bienvenida" role="button">Volver</a>
                    </div>
                </div>

            </div>
        </div> 
    </div>
</body>
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
    .color_verde{
        background-color:#FFFFFF;
        color:#386641;
    }
    .color7{
        background-color:#A7C957;
        color: black;
    }
    .centrado{
        display: flex;
        justify-content: center;
        align-items: center;
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

    .form_fav{
        width: 100%;
        max-width: 730px;
        padding: 30px;
        margin: 0 auto;
    }
    .ventana_favoritos{
        width: 400px;
        height: 212px;
        left: 80px;
        top: 225px;

        background: #A7C957;
        border-radius: 39px;
    }
    .titulo_favoritos{
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 25px;
        line-height: 29px;

        color: #000000;
    }
    .ventana_ferias{
        
        width: 900px;
        height: 400px;
        left: 533px;
        top: 248px;

        background: #C4C4C4;
    }
</style>