<!DOCTYPE html>
<html lang="es"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <title>FERION - Feria Online</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </head>
</head>
<body class=>
        <div class="row">
            <div class="col">
            </div>

            <div class="col text-center ">
                <div class="container-fluid ventana">
                    <a href="/"><img src="https://i.ibb.co/RQKpgvv/logo.png" alt="logo" ></a>
                    <form class="form-signin">
                        
                        <article class="card-body mx-auto" style="max-width: 400px;">
                            
                            <h4 class="card-title text-center">Crear cuenta</h4>
                            <form action=" {{URL::to('/cliente/create')}} ">
                                <div class="form-group input-group">
                                    <input name="nombre" class="form-control rounded-pill" placeholder="Nombre" type="text" required="">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <input name="correo" class="form-control rounded-pill" placeholder="Correo electrónico" type="email" required="">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <select class="custom-select rounded-pill" style="max-width: 120px;">
                                        <option selected="">+569</option>
                                        <option value="1">+562</option>
                                    </select>
                                    <input name="telefono" class="form-control rounded-pill" placeholder="Número teléfono" type="text">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group rounded-pill">
                                    <select class="form-control rounded-pill " placeholder="Seleccionar tipo de usuario" required="">
                                        <option>Cliente</option>
                                        <option>Feriante</option>
                                    </select>
                                </div> <!-- form-group end.// -->
                                <div class="form-group input-group">
                                    <input class="form-control rounded-pill" placeholder="Contraseña" type="password" required="" id="password">
                                </div> <!-- form-group// -->
                                <div class="form-group input-group">
                                    <input class="form-control rounded-pill" placeholder="Repetir contraseña" type="password" required="" oninput="check(this)">
                                </div> <!-- form-group// -->                                      
                                <div class="form-group text-center">
                                    <button class="btn btn-lg color4 rounded-pill" type="submit">Crear cuenta</button>
                                </div> <!-- form-group// -->      
                                <p class="text-center">¿Ya tienes cuenta?  <a href="/login">Inicia sesión aquí</a> </p>                                                                 
                        </form>
                        <div class = "end-100 bottom text-center padding_up">
                            <p class="padding_up text-muted ">FERION - Ferias Online - 2021</p>
                        </div> 
                        </article>
                    </form>
                </div> <!-- card.// -->
      
            </div>

            <div class="col">
            </div>

        </div><!--  Row -->
</body>


<!-- Javascript-->
<script language='javascript' type='text/javascript'>
    function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('No coinciden');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>

</html>
<!--CSS-->
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

    .divider-text {
        position: relative;
        text-align: center;
        margin-top: 15px;
        margin-bottom: 15px;
    }
    .divider-text span {
        padding: 7px;
        font-size: 12px;
        position: relative;   
        z-index: 2;
    }
    .divider-text:after {
        content: "";
        position: absolute;
        width: 100%;
        border-bottom: 1px solid #ddd;
        top: 55%;
        left: 0;
        z-index: 1;
    }
    
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-align: center;
        -ms-flex-pack: center;
        -webkit-box-align: center;
        align-items: center;
        -webkit-box-pack: center;
        justify-content: center;        
        padding-top: 40px;
        padding-bottom: 40px;
        background: linear-gradient(0deg, #A7C957 -12.51%, rgba(255, 255, 255, 0) 85.81%), #F9F6F7;        
        background-repeat: repeat-y;
    }

    .ventana{
        width: 540.93px;
        height: 693px;
        left: 482px;
        top: 26px;

        background: #FFFFFF;
        box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
        border-radius: 20px;
    }
    .padding_up{
        padding-top: 15px;
    }
    .margin-l{
        margin-left: 51px;
    }

    

</style>
