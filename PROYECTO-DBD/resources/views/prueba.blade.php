<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>FERION - Feria Online</title>
    <!-- Roboto  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body>
    
    <div class="container-fluid">

    <!-- barra superior -->
        <div class="row color1">

            <nav class="navbar navbar-expand-sm navbar-dark color1">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="#">
                    <img src="https://i.ibb.co/RQKpgvv/logo.png" onClick="window.location.reload();" alt="" height="40">
                </a>
            <!-- Links -->
            <div class="navbar-collapse collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link 1</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link 2</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link 3</a>
                    </li>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2 rounded-pill" type="search" placeholder="Busca tu producto" aria-label="Search">
                        <button class="btn btn-outline-success color3 rounded-pill" type="submit">Buscar</button>
                    </form>
                </ul>

            </div>
            <ul class="nav navbar-nav navbar-right">
                <!-- Boton Iniciar Sesion -->
                <div class="col-sm button">
                    <a class="btn btn-default color2 rounded-pill " href="/login" role="button">Iniciar Sesión</a>
                     
                </div>
                <!-- Boton Registrarse -->
                <div class="col-sm button ">
                    <a class="btn btn-default color2 rounded-pill " href="/register" role="button">Registrarse</a>
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

        
        <!-- Texto de bienvenida y publicidad-->

        <div class="row text-center padding-text">
        
            <h1> NO SALGAS DE TU HOGAR </h1>
            
        </div>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



        <!--Carousel de inicio-->
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item item active  ">
                    <img class="d-block item " src="https://i.ibb.co/QNYmqJw/Sin-t-tulo-1.png" alt="First slide">
                    <div class="carousel-caption d-none d-md-block color_verde ">
                        <h2>LAS MEJORES FRUTAS Y VERDURAS</h2>
                        <p>Inventen un texto para poner aqui.</p>
                    </div>
                </div>
                <div class="carousel-item item ">
                    <img class="d-block item " src="https://i.ibb.co/RpNqj7W/Sin-t-tulo-2.png" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block color_verde ">
                        <h2>ENCUENTRA TUS CARNES FAVORITAS</h2>
                        <p>Inventen un segundo texto para poner aqui.</p>
                    </div>
                </div>
                <div class="carousel-item item ">
                    <img class="d-block item" src="https://i.ibb.co/XDY5N9H/Sin-t-tulo-3.png" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block color_verde ">
                        <h2>¡ARTICULOS DE ASEO Y MUCHO MAS!</h2>
                        <p>Inventen un tercer texto para poner aqui.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next " href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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

    .fuente1{
        font-family: 'Roboto', sans-serif;
    }
    .margen_up{
        margin-top: 8%;
    }
    .margen_r{
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
    .carousel .item {
        height: 500px;
        margin: auto;
    }
    .carousel-inner {
        padding-top:70px; 
        overflow:hidden;
    }

    .carousel-caption {
        top: -70px;
        bottom: auto;
        background: rgba(0, 0, 0, 0);
    }


    .item img {
        height: auto;
        width: 100%;
        margin: auto;
        object-fit: contain;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        height: 100px;
        width: 100px;
        outline: black;
        background-size: 100%, 100%;
        border-radius: 50%;
        border: 1px solid black;
        background-image: none;
    }

    .carousel-control-next-icon:after
    {
        content: '>';
        font-size: 55px;
        color: red ;
    }

    .carousel-control-prev-icon:after {
        content: '<';
        font-size: 55px;
        color: red ;
    }
 </style> 