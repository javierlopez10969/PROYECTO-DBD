<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>FERION - Feria Online</title>
    <!-- Roboto  -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
</head>

<body class="text-center">
    <div class="container-fluid">

        <!-- barra superior -->
        <div class="row color1">

            <nav class="navbar navbar-expand-sm navbar-dark color1">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="#">
                    <img src="https://i.ibb.co/JcL3ghH/logo.png" onClick="window.location.reload();" alt="" height="40">
                </a>
                
                <div class="col-sm text-center padding-text color7">
                    <h1> Agregar Producto </h1>
                </div>
            </nav>

        </div>

        <!--  Titulo Modificar contraseña -->
        <div class="row justify-content-center">
            <div class="col space_title color_texto">Agregar nuevo Producto en Venta</div>
        </div>
 


            <!-- Agregar Producto -->
            <div class="col">
                <div class="container-fluid ventana_mc">
                <form action="/productonuevo" method="POST">
                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleInputNombre" style="padding: 20px" class="form-label">Nombre o Descripción del Producto</label>
                        <input type="text" class="form-control" name='nombre_producto' value="" placeholder='Nombre o Descripción del Producto'>
                    </div>
                    <div class="mb-3" style="padding: 15px">
                        <label for="exampleInputPrecio1" style="padding: 15px" class="form-label">Valor de Venta por Unidad</label>
                        <input type="number" class="form-control" name='precio_producto' value="" placeholder='Ej: 4990'>
                    </div>
                    <div class="mb-3" style="padding: 15px">
                        <label for="categoria" style="padding: 15px" class="form-label">Categoría</label>
                        <select for="exampleInputCategory1" class="form-select selector_region" value="" aria-label="selector_region" name="categoria">
                                <option selected value="">--Seleccione una Categoría--</option>
                                <option value="Frutas">Frutas</option>
                                <option value="Verduras">Verduras</option>
                                <option value="Carne y Pescado">Carnes y Pescado</option>
                                <option value="Huevos">Huevos</option>
                                <option value="Artículos de Aseo">Artículos de Aseo</option>
                                <option value="Alimento para Mascotas">Alimento para Mascotas</option>
                                <option value="Otros">Otros</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Poner en Venta</button>
                </form>

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
    .color6{
        color: blue;
    }

    .color7{
        background-color:#A7C957;
        color: black;
    }

    .color_texto{
        color: green;
    }

    .space_title{  
        font-family: Roboto;
        font-style: normal;
        font-weight: normal;
        font-size: 35px;
        line-height: 47px;
        padding: 20px;
    }

    .ventana_mc{
        width: 930px;
        height: 550px;
        left: 493px;
        top: 150px;

        background: #F2E8CF;
        border-radius: 39px;
    }

    .ventana_p{
        width: 400px;
        height: 250px;
        left: 50px;
        top: 150px;

        background: #A7C957;
        border-radius: 39px;
    }

    .form-password{
        width: 100%;
        max-width: 630px;
        padding: 50px;
        margin: 0 auto;
    }

    .form_perfil{
        width: 100%;
        max-width: 730px;
        padding: 30px;
        margin: 0 auto;
    }
    .padding_text{
        padding: 20px;
    }

    .padding_buttons{
        padding: 15px;
    }

 </style> 

<!-- Javascript para verificar si al ingresar la nueva contraseña, estas sean distintas-->
<script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Las contraseñas no coinciden');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>

<!-- Javascript para verificar si al ingresar la contraseña actual y la nueva contraseña, estas sean distintas-->
<script language='javascript' type='text/javascript'>
    function check_p(input) {
        if (input.value == document.getElementById('inputPassword').value) {
            input.setCustomValidity('La contraseña actual debe ser distinta a la nueva contraseña');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
