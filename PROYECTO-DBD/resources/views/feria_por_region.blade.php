<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Agregar Feria a Favoritos</title>
    <!-- Roboto  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body class="text-center">
    <div class="container-fluid">

        <!-- barra superior -->
        <div class="row color1">

            <nav class="navbar navbar-expand-sm navbar-dark color1">
                <!-- Brand/logo -->
                <a class="col navbar-brand" href="#">
                    <img src="https://i.ibb.co/JcL3ghH/logo.png" onClick="window.location.reload();" alt="" height="40">
                </a>
                
                <div class="navbar-collapse collapse">
                    <div class="col-sm text-center padding-text color7">
                        <h1> Agregar a Favoritos </h1>
                    </div>
                </div>

                <ul class="nav navbar-nav navbar-right">
                    <!-- Boton Iniciar Sesion -->
                    <div class="col-sm button">
                        <a class="btn btn-default color2 rounded-pill" style="width: 100px;"  href="/perfil_datosPersonales" role="button">Perfil</a>
                        
                    </div>
                    <!-- Boton Registrarse -->
                    <div class="col-sm button" style="width: 150px;">
                        <a class="btn btn-default color2 rounded-pill" href="/" role="button">Cerrar sesion</a>
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

        <!-- barra busqueda -->
        
        <div class="row" style="padding: 20px">
            <div class="container-fluid ventana_selector_region">
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
                <div class="col">
                    <div class="row" style="padding: 130px">
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