<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Prueba</title>
    <!-- Roboto  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">

    <!-- barra superior -->
        <div class="row color1">
            <div class="col-9 ">
                <a href="https://ibb.co/df9mxhD"><img src="https://i.ibb.co/JcL3ghH/logo.png"  alt="logo" border="0"></a>
            </div> 

            <div class="col button text-center ">
                <button type="button " class="btn btn-default color2 margen_up">Iniciar sesión</button>  
            </div>
            <div class="col button ">
                <button type="button" class="btn btn-default color2 margen_up">Registrarse</button>  
            </div>
        </div>
     <!-- barra productos -->
        <div class="row text-center">
            <div class="col border border-dark centrado">
                <h5 class = "fuente1 align-middle "> Frutas </h5> 
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

        
        <!-- Texto de bienvenida y publicidad-->

        <div class="row text-center padding-text">
        
            <h1> NO SALGAS DE TU HOGAR </h1>
            
        </div>

        <div class="row text-center color_verde padding-text">
        
            <h1> LAS MEJORES FRUTAS Y VERDURAS </h1>
    
        </div>

        <div class="row text-center">
            <a href="https://ibb.co/4T4NDFr"><img src="https://i.ibb.co/QNYmqJw/Sin-t-tulo-1.png" alt="Frutas y verduras" border="0"></a>
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
    .color_verde{
        background-color:#FFFFFF;
        color:#386641;
    }

    .fuente1{
        font-family: 'Roboto', sans-serif;
    }
    .margen_up{
        margin-top: 8%;
    }
    .margen_r{s
        margin-right: 5%;
    }
    .margen_l{
        margin-left: 5%;
    }
    .padding-text{
        padding-top:30px;
    }
    .centrado{
        display: flex;
        justify-content: center;
        align-items: center;
    }


 </style> 