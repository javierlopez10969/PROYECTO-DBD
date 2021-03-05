@extends('layouts.main')

@section('seccion')

    <div class="container-fluid mx-0 px-0 ">
        <!-- BOTONES -->
        <div class="row justify-content-end">
            <div class="col-6" style="padding: 20px">
                <a class="btn color2" href="#" role="button">Listado puestos de ventas</a>
                <a class="btn color2" href="/feriantes_producto" role="button">Listado feriantes</a>
                <a class="btn color2" href="/feria_region" role="button">Listado ferias</a>
                <a class="btn color2" href="/feriante_fav" role="button">Mis favoritos</a>
            </div>
            <div class="col-4" style="padding: 20px">
                <a class="btn color2" href="/carrito" role="button">Mi carrito</a>

            </div>
        </div>
        

        <!-- linea ofertas -->
        <div class="row" style="padding: 40px">
            <div class="col titulo_ofertas text-start">Ofertas</div>
        </div>

        <!-- linea destacados -->
        <div class="row" style="padding: 40px">
            <div class="col titulo_destacados text-start">Destacados</div>
        </div>     

        <!-- linea productos -->
        <div class="row" style="padding: 40px">
            <div class="col titulo_productos text-start">Productos</div>
        </div>             

        <!-- barra ofertas -->
        <div class="row" style="padding: 20px">
            <div class="container-fluid ">
                <!-- Primera linea -->
                <div class="row">
                    
                </div>
            </div>
        </div>

        <!-- barra destacados -->
        <div class="row" style="padding: 20px">
            <div class="container-fluid ">
                <!-- Primera linea -->
                <div class="row">
                    
                </div>
            </div>
        </div>

        <!-- barra productos -->
        <div class="row" style="padding: 20px">
            <div class="container-fluid ">
                <!-- Primera linea -->
                <div class="row">
                    
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
        .centrado{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .ventana_ofertas{
            position: absolute;
            width: 1000px;
            height: 364px;
            left: 109px;
            top: 333px;
            background: #C4C4C4;
        }
        .ventana_destacados{
            position: absolute;
            width: 1218px;
            height: 364px;
            left: 112px;
            top: 855px;
            background: #C4C4C4;
        }
        .ventana_productos{
            position: absolute;
            width: 1218px;
            height: 364px;
            left: 112px;
            top: 1375px;
            background: #C4C4C4;
        }
        .titulo_ofertas{
            position: absolute;
            width: 362px;
            height: 102px;
            left: 113px;
            top: 231px;
    
            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            font-size: 50px;
            line-height: 59px;
            display: flex;
            align-items: center;
            text-align: center;
    
            color: #000000;
        }
        .titulo_destacados{
            position: absolute;
            width: 362px;
            height: 102px;
            left: 109px;
            top: 753px;
    
            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            font-size: 50px;
            line-height: 59px;
            display: flex;
            align-items: center;
            text-align: center;
    
            color: #000000;
        }
        .titulo_productos{
            position: absolute;
            width: 362px;
            height: 102px;
            left: 113px;
            top: 1273px;
    
            font-family: Roboto;
            font-style: normal;
            font-weight: normal;
            font-size: 50px;
            line-height: 59px;
            display: flex;
            align-items: center;
            text-align: center;
    
            color: #000000;
        }
    </style>

@endsection
   