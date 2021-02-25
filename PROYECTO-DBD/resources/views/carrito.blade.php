<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Carrito de compras</title>
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
                        <h1> Mi carrito </h1>
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

        <!-- Cuadrado mayor-->
        <div class="row" style="padding: 20px">
            <div class="container-fluid ventana_mayor">
                <!-- Primera linea -->
                <div class="row">
                    <!-- Título -->
                    <div class="col titulo_carrito">
                        Carrito de compras
                    </div>

                    <!-- Barrita mostrando el precio total de productos -->
                    <div class="col">
                        <div class="row" style="padding: 30px">
                            <div class="container-fluid ventana_precio">
                                <div class="row">
                                    <div class="col titulo_precioTotal text-start"> Total $:</div>
                                    <div class="col titulo_precioTotal text-end"> 0 </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Columna-->
                <div class="row">
                    <div class="container-fluid ventana_listar">
                        <div class="col">
                            <!-- Agregar datos a la tabla -->
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nombre producto</th>
                                        <th>Categoria</th>
                                        <th>Unidad</th>
                                        <th>Tipo de stock</th>
                                        <th>Precio $</th>
                                    </tr>
                                </thead>
                                
                            </table>
                        </div>
                    </div>
                </div>

                <!-- Botones -->
                <div class="row" style="padding: 20px">
                    <!-- Boton de volver al menú -->
                    <div class="col">
                        <a class="btn btn-secondary btn-lg" href="#" role="button">Volver al menú</a>
                    </div>

                    <!-- Boton de comprar -->
                    <div class="col">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Comprar</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>
</html>
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
    .ventana_mayor{
        width: 1329px;
        height: 580px;
        left: 44px;
        top: 145px;
        background: #F2E8CF;
        border-radius: 71px;
    }
    .ventana_listar{
        width: 1165px;
        height: 390px;
        left: 183px;
        top: 266.4px;

        background: #FFFEFE;
    }
    .ventana_precio{
        width: 490px;
        height: 43px;
        left: 768px;
        top: 185.8px;

        background: #A7C957;
    }
    .titulo_carrito{  
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 40px;
        line-height: 47px;
        padding: 20px;
    }

    .titulo_precioTotal{
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 20px;
        line-height: 23px;
        padding: 20px;
    }
 </style> 