@extends('layouts.main')

@section('seccion')
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
                    <p>Manzanas, Naranjas y muchas otras frutas.</p>
                </div>
            </div>
            <div class="carousel-item item ">
                <img class="d-block item " src="https://i.ibb.co/RpNqj7W/Sin-t-tulo-2.png" alt="Second slide">
                <div class="carousel-caption d-none d-md-block color_verde ">
                    <h2>ENCUENTRA TUS CARNES FAVORITAS</h2>
                    <p>Haz el asado perfecto!</p>
                </div>
            </div>
            <div class="carousel-item item ">
                <img class="d-block item" src="https://i.ibb.co/XDY5N9H/Sin-t-tulo-3.png" alt="Third slide">
                <div class="carousel-caption d-none d-md-block color_verde ">
                    <h2>¡ARTICULOS DE ASEO Y MUCHO MAS!</h2>
                    <p>Articulos del hogar, comida para mascotas, entre otros.</p>
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
@endsection