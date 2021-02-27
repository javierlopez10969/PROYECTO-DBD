<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Confirmar Pago</title>
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
                        <h1> Confirmar Pago </h1>
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

        <!-- ventana metodo pago -->
        <div class="row" style="padding: 20px">
            <div class="container-fluid ventana_metodo_pago">
                <!-- Primera linea -->
                <div class="row" style="padding: 40px">
                    <div class="col titulo_metodo_pago text-start">Escoge un Método de pago</div>
                </div>
                <!-- Botones -->
                <div class="row" style="padding: 10px">
                    <!-- Boton de cuenta -->
                    <div class="col">
                        <a class="btn btn-secondary btn-lg" href="#" role="button">Trans. Bancaria</a>
                    </div>

                    <!-- Boton de debito -->
                    <div class="col">
                        <a class="btn btn-secondary btn-lg" href="#" role="button">Tarjeta Débito</a>
                    </div>

                    <!-- Boton de credito -->
                    <div class="col">
                        <a class="btn btn-secondary btn-lg" href="#" role="button">Tarjeta Crédito</a>
                    </div>
                </div>

                <div class="row">
                    <div class="container-fluid ventana_lista_metodo_pago">

                    </div>
                </div>


            </div>
        </div>

        <!-- ventana carrito-->
        <div class="row" style="padding: 20px">
            <div class="container-fluid ventana_carrito">
                <div class="row" style="padding: 40px">
                    <div class="col titulo_carrito text-start">Resumen del Carrito</div>
                </div>

                <div class="row">
                    <div class="container-fluid ventana_lista_carrito">

                    </div>
                </div> 

                <!-- Botones -->
                <div class="row" style="padding: 10px">
                    <!-- Boton de comprar -->
                    <div class="col">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Confirmar Compra</a>
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
    .ventana_metodo_pago{
        position: absolute;
        width: 753px;
        height: 784px;
        left: 52px;
        top: 164px;

        background: #F2E8CF;
        border-radius: 70px;
    }
    .ventana_lista_metodo_pago{
        width: 655px;
        height: 561px;
        left: 95px;
        top: 354px;

        background: #C4C4C4;
        border-radius: 57px;
    }
    .titulo_metodo_pago{
        width: 491px;
        height: 53px;
        left: 100px;
        top: 198px;

        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 30px;
        line-height: 35px;

        color: #245F00;
    }
    .ventana_carrito{
        position: absolute;
        width: 550px;
        height: 784px;
        left: 858px;
        top: 164px;

        background: #F2E8CF;
        border-radius: 70px
    }
    .ventana_lista_carrito{
        width: 513px;
        height: 492px;
        left: 876px;
        top: 270px;

        background: #FFFFFF;
        border-radius: 38px;
    }
    .titulo_carrito{
        width: 328px;
        height: 53px;
        left: 1002px;
        top: 200px;

        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 30px;
        line-height: 35px;

        color: #245F00;
    }
</style>