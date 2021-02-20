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
                    <h1> Perfil </h1>
                </div>
            </nav>

        </div>

        <!--  Titulo Mis datos personales -->
        <div class="row justify-content-center">
            <div class="col-4"></div>
            <div class="col-4 space_title color_texto">Mis datos personales</div>
        </div>
 
        <!-- cuadrados -->
        <div class="row">
            <!-- Mi perfil -->
            <div class="col-4">
                <div class="container-fluid ventana_p">
                    <form class="form_perfil">
                        <h4 class="card-titl text-center">Mi perfil</h4>
                        <div class="list-group padding_buttons">
                            <a href="#" class="list-group-item list-group-item-action color7">Mis datos personales</a>
                            <a href="#" class="list-group-item list-group-item-action color7">Modificar contraseña</a>
                        </div>
                    </form>

                </div>
            </div>

            <!-- Datos Personales -->
            <div class="col-8">
                <div class="container-fluid ventana_dp">
                    <form class="form-personal">
                        <div class="col-12 padding_text">
                            <label class="form-label">Nombre completo *</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        <div class="col-12 padding_text">
                            <label class="form-label">Numero de telefono *</label>
                            <input type="text" class="form-control" id="">
                        </div>
                        
                        <div class="row padding_text">
                            <div class="col-6">
                                <label class="form-label">Nombre de usuario *</label>
                                <input type="text" class="form-control" id="">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Rol *</label>
                                <input type="text" class="form-control" id="">
                            </div>
                        </div>
                        
                        <div class="col-12 padding_text">
                            <label for="inputEmail" class="form-label">Correo electrónico *</label>
                            <input type="email" id="inputEmail" class="form-control" required="" autofocus="">
                        </div>
                        <div class="col-12 padding_text">
                            <label for="inputPassword" class="form-label">Contraseña</label>
                            <input type="password" id="inputPassword" class="form-control" >                      
                        </div>
                        
                        <div class="col-12 padding_buttons">
                            <button type="button" class="btn btn-secondary btn-lg">Volver al menú</button>
                            <button type="button" class="btn btn-primary btn-lg">Guardar</button>
                        </div>  
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

    .ventana_dp{
        width: 930px;
        height: 550px;
        left: 493px;
        top: 150px;

        background: #F2E8CF;
        border-radius: 39px;
    }

    .ventana_p{
        width: 400px;
        height: 207.83px;
        left: 50px;
        top: 150px;

        background: #A7C957;
        border-radius: 39px;
    }

    .form-personal {
        width: 100%;
        max-width: 630px;
        padding: 10px;
        margin: 0 auto;
    }

    .form_perfil{
        width: 100%;
        max-width: 730px;
        padding: 30px;
        margin: 0 auto;
    }
    .padding_text{
        padding: 10px;
    }

    .padding_buttons{
        padding: 15px;
    }
 </style> 