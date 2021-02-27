@extends('layouts.main')

@section('seccion')
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
@endsection