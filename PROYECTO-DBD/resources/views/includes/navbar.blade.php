<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href=" https://unpkg.com/@popperjs/core@2">
</head>

<body>
    <div id="app" class="row mx-0 px-0">
        <nav class="navbar navbar-expand-sm navbar-dark color1">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src= "https://i.ibb.co/RQKpgvv/logo.png"  alt="" height="40">
                </a>
                    <!-- Links -->
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav">
                        @guest
                        @if (Route::has('login'))                        
                        @endif
                        @if (Route::has('register'))                        
                        @endif    
                        @else                        
                        @endguest
                        <form class="form-inline">
                            <input class="form-control mr-sm-2 rounded-pill" type="search" placeholder="Busca tu producto" aria-label="Search">
                            <button class="btn btn-outline-success color3 rounded-pill" type="submit">Buscar</button>
                        </form>                        
                    </ul>

                    <div class="col-sm button">
                        <a class="btn btn-default color2 rounded-pill" role="button" href="/productocategoria">{{ __('Productos') }}</a>
                        <a class="btn btn-default color2 rounded-pill" role="button" href="/feriacomuna">{{ __('Ferias') }}</a>
                    </div>

                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="col-sm button">
                                    <a class="btn btn-default color2 rounded-pill" role="button" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="col-sm button">
                                    <a class="btn btn-default color2 rounded-pill" role="button" href="{{ route('register') }}">{{ __('Resgistrarse') }}</a>
                                </li>
                            @endif

                            @else
                            <li>
                                <!--solo los clientes tienen carrito de compras-->
                                @if (Auth::user()->rol == "Cliente")
                                <li class="col-sm button">
                                    <a class="btn btn-default color2 rounded-pill" role="button" href="/carrito"><i class="bi bi-cart"></i></a>
                                </li>
                                @endif
                                
                                @if (Auth::user()->rol == "Feriante")
                                <li class="col-sm button">
                                    <a class="btn btn-default color2 rounded-pill" role="button" href="/mitienda"><i class="bi bi-shop"></i></a>
                                </li>
                                @endif

                                <div class="card text-center px-0" style="width: 10rem; height: 40px;">
                                    <div class="card-body mx-0" style="padding-top: 5px;">
                                      <h6 class="card-subtitle mb-1 text-muted">{{Auth::user()->name }}</h6>
                                      <h6 class="card-subtitle  text-muted">{{Auth::user()->rol }}</h6>
                                    </div>
                                  </div>                            
                                  
                                <li class="col-sm button">
                                    <a class="btn btn-default color2 rounded-pill" role="button" href="/perfil_datosActuales">{{ __('Mi Perfil') }}</a>
                                </li>

                                <li class="col-sm button">
                                    <a class="btn btn-default color2 rounded-pill" role="button" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                     {{ __('Cerrar sesión') }}</a>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>

                                </div>
                            </li>

                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

                <!-- barra productos -->
                <div class="row">
                    <div class="col border border-dark centrado ">
                        <h5 >
                            <a class="colorRojo" href="http://127.0.0.1:8000/productocategoria?categoria=Frutas">Frutas  </a> 
                        </h5>
                    </div>  
        
                    <div class="col border border-dark centrado">
                        <h5 > <a class="colorRojo" href="http://127.0.0.1:8000/productocategoria?categoria=Verduras"> Verduras </a>  </h5>
                    </div>  
                    <div class="col border border-dark centrado">
                        <h5 > <a class="colorRojo" href="http://127.0.0.1:8000/productocategoria?categoria=Pollo">Pollo  </a>  </h5>
                    </div>
        
                    <div class="col border border-dark centrado">
                        <h5> <a class="colorRojo" href="http://127.0.0.1:8000/productocategoria?categoria=Carne+y+Pescado">Carne y Pescado  </a>   </h5>
                    </div>
        
                    <div class="col border border-dark centrado">
                        <h5> <a  class="colorRojo" href="http://127.0.0.1:8000/productocategoria?categoria=Huevos">Huevos  </a>  </h5> 
                    </div>
        
                    <div class="col border border-dark centrado">
                        <h5> <a class="colorRojo" href="http://127.0.0.1:8000/productocategoria?categoria=Artículos+de+Aseo">Articulos de aseo</a>  </h5>
                    </div>  
                    <div class="col border border-dark centrado">
                        <h5> <a class="colorRojo"  href="http://127.0.0.1:8000/productocategoria?categoria=Alimento+para+Mascotas"> Comida para mascotas</a>  </h5>
                    </div>
        
                    <div class="col border border-dark centrado">
                        <h5><a class="colorRojo" href="http://127.0.0.1:8000/productocategoria?categoria=Otros">Otros  </a> </h5>
                    </div>
                </div>
    
    </div>
</body>
</html>


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
        color:white;
        
    }
    .color7:hover{
        background-color:#A7C957;  
        color:white;
        text-decoration: none;
        
    }
    .negro{
        color:black;
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
    .ventana{
        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
    }
 </style> 