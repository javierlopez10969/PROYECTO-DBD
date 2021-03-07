@extends('layouts.main')

@section('seccion')
    <div class="container-fluid">

                <div class="navbar-collapse collapse">
                    <div class="col-sm text-center padding-text color7">
                        <h1> Lista de Ferias </h1>
                    </div>
                </div>


        <!-- barra busqueda -->
        
        <div class="row" style="padding: 20px">
            <div class="container-fluid " style="max-width: 500px;">
                <!-- Primera linea -->
                <div class="row">
                    <form>
                        <select class="form-select selector_region" aria-label="selector_region" name="nombre_comuna">
                            <option selected value="">--Selecciona una Comuna--</option>
                            <option value="Arica">Arica</option>
                            <option value="Chincolco">Chincolco</option>
                            <option value="La Florida">La Florida</option>
                            <option value="La Serena">La Serena</option>
                            <option value="Putaentdo">Putaentdo</option>
                            <option value="Quilicura">Quilicura</option>
                            <option value="Rancagua">Rancagua</option>
                            <option value="Renca">Renca</option>
                            <option value="Rengo">Rengo</option>
                            <option value="San Lorenzo">San Lorenzo</option>
                            <option value="San Felipe">San Felipe</option>
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
                                    <th scope="col">Codigo</th>
                                    <th scope="col">Descripcion</th>
                                    <th scope="col">Comuna</th>
                                    <th scope="col">Desde</th>
                                    <th scope="col">Hasta</th>
                                    </tr>
                                </thead>
                                @forelse($feria as $feria)
                                <tbody>
                                    <tr>
                                    <td>{{$feria->id}}</td>
                                    <td>{{$feria->descripcion}}</td>
                                    <td>{{$feria->nombre_comuna}}</td>
                                    <td>{{$feria->horario_desde}}</td>
                                    <td>{{$feria->horario_hasta}}</td>
                                    </tr>
                                </tbody>
                                @empty
                                <p>"no hay nada"</p>
                                @endforelse
                                
                            </table>
                           
                        </div>
                    </div>
                </div>


                <!-- Botones -->
                <div class="row" style="padding: 10px">
                    <!-- Boton de comprar ahora -->
                    <div class="col">
                        <a class="btn btn-primary btn-lg" href="#" role="button">Agregar a Favoritos</a>
                    </div>

                    <!-- Boton de agregar a carrito -->
                    <div class="col">
                        <a class="btn btn-secondary btn-lg" href="#" role="button">Volver</a>
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