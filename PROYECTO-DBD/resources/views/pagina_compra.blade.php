@extends('layouts.main')

@section('seccion')
    <div class="container-fluid text-center ">
        <!-- barra superior -->        
        <div class="navbar-collapse collapse">
            <div class="col-sm text-center padding-text color7">
                <h1> Comprar </h1>
            </div>
        </div>
        <!-- Cuadrado compra-->
        <div class="row">
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
                    <a class="btn btn-primary btn-lg" href="http://127.0.0.1:8000/confirmar_pago" role="button">Comprar Ahora</a>
                </div>

                <!-- Boton de agregar a carrito -->
                <form action=/agregarCarrito method="POST">
                <div class="col">
                    <input type="hidden" name="id_producto" value= "{{ $producto->id }}"> 
                    <input type="hidden" name="id_cliente" value= "1">   
                    <button type="submit" class="btn btn-secondary">Agregar al Carrito</button>
                </div>
                </form>
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
    .color7{
        background-color:#A7C957;
        color: black;
    }
    .ventana_vendedor{
        width: 674px;
        height: 265px;
        left: 43px;
        top: 713px;
        background: #F2E8CF;    
        border-radius: 20px;    
    }
    .ventana_compra{
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
    </style> 
@endsection