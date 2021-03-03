<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Comprar</title>
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
                        <h1> Comprar </h1>
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

        <!-- Cuadrado compra-->
            <div class="row" style="padding: 20px">
            <div class="container-fluid ventana_compra">
                <!-- Primera linea -->
                <div class="row">

                    
                   
                    
                    <!-- Barrita mostrando el nombre del producto -->
                    <div class="col">
                        <div class="row" style="padding: 30px">
                            <div class="container-fluid ventana_nombre">
                                <div class="row">
                                    <div class="col titulo_nombre text-start"> {{$producto->nombre_producto}}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Barrita mostrando el precio del producto -->
                    <div class="col">
                        <div class="row" style="padding: 30px">
                            <div class="container-fluid ventana_precio">
                                <div class="row">
                                    <div class="col titulo_precio text-start">$</div>
                                    <div class="col titulo_precio text-end">{{$producto->precio_producto}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    
                    

                    <!-- Barrita mostrando la descripcion del producto -->
                    <div class="col">
                        <div class="row" style="padding: 30px">
                            <div class="container-fluid ventana_descripcion">
                                <div class="row">
                                    <div class="col titulo_descripcion text-start">Descripcion del Producto</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Botones -->
                <div class="row" style="padding: 20px">
                    <!-- Boton de comprar ahora -->
                    <div class="col">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Comprar Ahora</a>
                    </div>

                    <!-- Boton de agregar a carrito -->
                    <div class="col">
                        <a class="btn btn-secondary btn-lg" href="#" role="button">Agregar a Carrito</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cuadrado vendedor-->
        <div class="row" style="padding: 20px">
            <div class="container-fluid ventana_vendedor">
                <!-- Primera linea -->
                <div class="row">
                    <div class="col titulo_vendedor text-start"> Datos del Vendedor</div>
                   <!-- <div class="col titulo_descripcion text-end"> . </div>-->
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
    .ventana_vendedor{
        position: absolute;
        width: 674px;
        height: 265px;
        left: 43px;
        top: 713px;
        background: #F2E8CF;    
        border-radius: 20px;    
    }
    .ventana_compra{
        position: absolute;
        width: 632px;
        height: 824px;
        left: 761px;
        top: 157px;
        background: #F2E8CF;
        border-radius: 20px;
    }
    .ventana_nombre{
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 10px;
        width: 527px;
        height: 84px;
        left: 817px;
        top: 198px;
        background: #DB7F7F;
        border-radius: 20px;
    }
    .ventana_precio{
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 10px;

        width: 527px;
        height: 109px;
        left: 813px;
        top: 335px;

        background: #F2E8CF;
        border-radius: 20px;
    }
    .ventana_descripcion{
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        padding: 10px;

        width: 527px;
        height: 295px;
        left: 813px;
        top: 463px;

        background: #F2E8CF;
        border-radius: 20px;
    }
    .titulo_vendedor{
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 23px;
        display: flex;
        align-items: center;
        color: #000000;
        padding: 20px;
    }
    .titulo_nombre{
        position: static;
        width: 543px;
        height: 64px;
        left: 10px;
        top: 10px;

        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 23px;
        display: flex;
        align-items: center;

        color: #000000;
    }
    .titulo_precio{
        position: static;
        width: 543px;
        height: 64px;
        left: 10px;
        top: 10px;

        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 40px;
        line-height: 47px;
        display: flex;
        align-items: center;

        color: #000000;
    }
    .titulo_descripcion{
        position: static;
        width: 543px;
        height: 64px;
        left: 10px;
        top: 10px;

        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 23px;
        display: flex;
        align-items: center;

        color: #000000;
    }