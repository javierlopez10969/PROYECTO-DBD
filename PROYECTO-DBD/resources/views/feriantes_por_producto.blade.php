@extends('layouts.main')

@section('seccion')
    <div class="container-fluid text-center">

        <!-- barra superior -->
        <div class="row color1">
                
                <div class="navbar-collapse collapse">
                    <div class="col-sm text-center padding-text color7">
                        <h1> Nuestros Feriantes </h1>
                    </div>
                </div>
        </div>

        <!-- barra busqueda -->
        
        <div class="row" style="padding: ">
            <div class="container-fluid" style="max-width: 500px;">
                <!-- Primera linea -->
                <div class="row">
                    <form>
                        <select class="form-select selector_region" aria-label="selector_region" name="categoria">
                            <option selected value="">--Seleccione un Producto--</option>
                            <option value="Frutas">Frutas</option>
                            <option value="Verduras">Verduras</option>
                            <option value="Carne y Pescado">Carnes y Pescado</option>
                            <option value="Huevos">Huevos</option>
                            <option value="Artículos de Aseo">Artículos de Aseo</option>
                            <option value="Alimento para Mascotas">Alimento para Mascotas</option>
                            <option value="Otros">Otros</option>
                        </select>
                    </div>
                        
                        <input type="submit" value="Seleccionar" class="btn btn-warning"/>
                        
                    </form>
                </div>

                    <!-- Tabla con la Lista de Ferias -->
                    <div class="row">
                        <div class="col" style="padding: 30px">
                            <div class="col titulo_ferias text-start"> Nuestras Ferias </div>
                                <table class="table table-dark table-hover">
                                    <thead>
                                        <tr>
                                        <th scope="col">Cod. ref.</th>
                                        <th scope="col">Producto</th>
                                        <th scope="col">Categoria</th>
                                        <th scope="col">Precio</th>
                                        </tr>
                                    </thead>

                                    @forelse($producto as $producto)
                                    <tbody>
                                    <tr onclick="window.location = 'http://127.0.0.1:8000/producto/{{$producto->id}}'">

                                        
                                        <td>{{$producto->id}}</td>
                                        <td>{{$producto->nombre_producto}}</td>
                                        <td>{{$producto->categoria}}</td>
                                        <td>{{$producto->precio_producto}}</td>
                                        
                                    </tr>
                                    </tbody>

                                    
                                    @empty
                                    <p>"no hay nada"</p>
                                    @endforelse

                                


                                </table>
                            </div>
                        </div>
                    </div>






                            </div>
                        </div>
                    </div>

                <!-- Botones -->
                <div class="row" style="padding: 10px">
                    <!-- Boton de agregar a carrito -->
                    <div class="col">
                        <a class="btn btn-secondary btn-lg" href="/" role="button">Volver</a>
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
    .ventana_selector_region{
        position: absolute;
        width: 1077px;
        height: 60px;
        left: 162px;
        top: 217px;

        background: #FFFFFF;
    }
    .ventana_ferias{
        width: 1092px;
        height: 496px;
        left: 160px;
        top: 197px;

        background: #C4C4C4;
    }
    </style>

@endsection