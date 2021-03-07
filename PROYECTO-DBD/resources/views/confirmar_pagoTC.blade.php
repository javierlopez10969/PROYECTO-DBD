@extends('layouts.main')
@section('seccion')

<body class="text-center">
    <div class="container-fluid">
        <div class="row">
            <!-- ventana metodo pago -->
            <div class="col" style="padding: 10px">

                <div class="container-fluid ventana_metodo_pago">
                    <!-- Primera linea -->
                    <div class="row" style="padding: 20px">
                        <div class="col titulo_metodo_pago text-start">Escoge un Método de pago</div>
                    </div>
                    
                    <!-- Botones -->
                    <div class="row" style="padding: 10px">
                        <nav aria-label="...">
                            <ul class="pagination pagination-lg justify-content-center">
                                <li class="page-item"><a class="page-link" href="/confirmar_pagoCB">Mi cuenta bancaria</a></li>
                                <li class="page-item"><a class="page-link" href="/confirmar_pagoTD">Tarjeta Débito</a></li>
                                <li class="page-item active" aria-current="page">
                                <span class="page-link">Tarjeta Crédito</span>
                                </li>
                            </ul>
                        </nav>
                        
                    </div>

                    <div class="row">
                        <div class="container-fluid ventana_lista_metodo_pago">
                            <form class="form-cuenta">
                                <div class="col-12 padding_text">
                                    <label class="form-label">Número de tarjeta *</label>
                                    <input type="text" class="form-control" id="" required="">
                                </div>
                                <div class="col-12 padding_text">
                                    <label class="form-label">Título de tarjeta *</label>
                                    <input type="text" class="form-control" id="" required="">
                                </div>
                                <div class="row">
                                    <div class="col">
                                    <label class="form-label">Fecha de caducidad *</label>
                                    <select class="form-select" id="validationCustom04" required="" aria-label="Default select example">
                                        <option selected>Mes</option>
                                        <option value="1">Enero</option>
                                        <option value="2">Febrero</option>
                                        <option value="3">Marzo</option>
                                        <option value="4">Abril</option>
                                        <option value="5">Mayo</option>
                                        <option value="6">Junio</option>
                                        <option value="7">Julio</option>
                                        <option value="8">Agosto</option>
                                        <option value="9">Septiembre</option>
                                        <option value="10">Octubre</option>
                                        <option value="11">Noviembre</option>
                                        <option value="12">Diciembre</option>
                                    </select>
                                    </div>
                                    <div class="col">
                                    <label class="form-label">Año de vencimiento*</label>
                                        <select class="form-select" id="validationCustom04" required="" aria-label="Default select example">
                                            <option selected>Año</option>
                                            <option value="1">2021</option>
                                            <option value="2">2022</option>
                                            <option value="3">2023</option>
                                            <option value="4">2024</option>
                                            <option value="5">2025</option>
                                            <option value="6">2026</option>
                                            <option value="7">2027</option>
                                            <option value="8">2028</option>
                                            <option value="9">2029</option>
                                            <option value="10">2030</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label class="form-label">CVV *</label>
                                        <input type="text" class="form-control" id="" required="">
                                    </div>
                                </div>
                
                                <div class="col-12" style="padding: 50px;">
                                    <button type="submit" class="btn btn-primary btn-lg">Pagar ahora</button>
                                </div>  
                            </form>
                        </div>
                    </div>

                    </div>
                </div>
            </div>

            <!-- ventana carrito-->
            <div class="col" style="padding: 20px">
                <div class="container-fluid ventana_carrito">
                    <div class="row" style="padding: 40px">
                        <div class="col titulo_carrito text-start">Resumen del Carrito</div>
                    </div>

                    <div class="row">
                        <div class="container-fluid ventana_lista_carrito">

                        </div>
                    </div> 

                    <!-- Botones -->
                    <div class="row" style="padding: 10px">
                        <!-- Boton de comprar -->
                        <div class="col">
                            <a class="btn btn-primary btn-lg" href="#" role="button">Confirmar Compra</a>
                        </div>
                    </div>            
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
    .ventana_metodo_pago{
        
        width: 753px;
        height: 784px;
        left: 52px;
        top: 164px;

        background: #F2E8CF;
        border-radius: 70px;
    }
    .ventana_lista_metodo_pago{
        width: 655px;
        height: 561px;
        left: 95px;
        top: 354px;

        background: #C4C4C4;
        border-radius: 57px;
    }
    .titulo_metodo_pago{
        width: 491px;
        height: 53px;
        left: 100px;

        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 30px;
        line-height: 35px;

        color: #245F00;
    }
    .ventana_carrito{
        
        width: 550px;
        height: 784px;
        left: 52px;
        top: 164px;

        background: #F2E8CF;
        border-radius: 70px
    }
    .ventana_lista_carrito{
        width: 513px;
        height: 492px;
        left: 876px;
        top: 270px;

        background: #FFFFFF;
        border-radius: 38px;
    }
    .titulo_carrito{
        width: 328px;
        height: 53px;
        left: 100px;

        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 30px;
        line-height: 35px;

        color: #245F00;
    }
    .form-cuenta {
        width: 100%;
        max-width: 630px;
        padding: 45px;
        margin: 0 auto;
    }
</style>

@endsection