@extends('layouts.main')
@section('seccion')

<body class="text-center">
    <div class="container-fluid">

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
                                        <th>Cod. Ref.</th>
                                        <th>Nombre producto</th>
                                        <th>Categoria</th>
                                        <th>Precio</th>
                                    </tr>
                                    @forelse($carts as $cart)
                                    @forelse($productos as $producto)
                                        @if($cart->id_producto == $producto->id)
                                        <tbody>
                                            <tr>
                                            <td>{{$producto->id}}</td>
                                            <td>{{$producto->nombre_producto}}</td>
                                            <td>{{$producto->categoria}}</td>
                                            <td>${{$producto->precio_producto}}</td>>
                                            </tr>
                                        </tbody>
                                        @endif
                                    @empty
                                    <p>"no hay nada"</p>
                                    @endforelse
                                @empty
                                <p>"no hay nada"</p>
                                @endforelse
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
                        <a class="btn btn-primary btn-lg" href="/confirmar_pagoCB" role="button">Comprar</a>
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
 
 @endsection