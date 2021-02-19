<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.0/examples/sign-in/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">
    <title>FERION - Feria Online</title>
  </head>

<body class="text-center">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col">
            </div>

            <div class="col">
                
                <div class="container-fluid ventana">
                    <a href="/"><img src="https://i.ibb.co/RQKpgvv/logo.png" alt="logo" ></a>
                    <form class="form-signin ">                        
                        <h4 class="card-titl text-center">Iniciar sesión</h4>
                        <label for="inputEmail" class="sr-only">Correo electrónico</label>
                        <input type="email" id="inputEmail" class="form-control rounded-pill" placeholder="Correo electrónico" required="" autofocus="">
                        <label for="inputPassword" class="sr-only">Contraseña</label>
                        <input type="password" id="inputPassword" class="form-control rounded-pill" placeholder="Contraseña" required="">
                        <div class="checkbox mb-3">
                          <label>
                            <input type="checkbox" value="remember-me"> Recordarme en este equipo
                          </label>
                        </div>
                        <button class="btn btn-lg color4 rounded-pill" type="submit">Ingresar</button>

                    </form>
                    <p class="text-center mt-lg-5">¿No tienes Cuenta?  <a href="/register">Registrate aquí</a> </p>  

                    <div class = "end-100 bottom">
                        <p class="padding_up text-muted ">FERION - Ferias Online - 2021</p>
                    </div>        
                </div>   
            </div>

            <div class="col">
            </div>
          </div>
    </div>

  

</body></html>
</html>


<!-- CSS -->
<style>

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
    
    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: 0 auto;
    }
    .form-signin .checkbox {
        font-weight: 400;
    }
    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }   
    .form-signin .form-control:focus {
        z-index: 2;
    }
    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }
    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }
    .color_boton{
       background-color: #A7C957;
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
        padding-top: 127px;
    }

</style>