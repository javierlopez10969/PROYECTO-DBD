<div class="row color1">
    <nav class="navbar navbar-expand-sm navbar-dark color1">
        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src= "https://i.ibb.co/RQKpgvv/logo.png" onClick="window.location.reload();" alt="" height="40">
        </a>
    <!-- Links -->
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#">Link 1</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link 2</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link 3</a>
            </li>
            <form class="form-inline">
                <input class="form-control mr-sm-2 rounded-pill" type="search" placeholder="Busca tu producto" aria-label="Search">
                <button class="btn btn-outline-success color3 rounded-pill" type="submit">Buscar</button>
            </form>
        </ul>

    </div>
    <ul class="nav navbar-nav navbar-right">
        <!-- Boton Iniciar Sesion -->
        <div class="col-sm button">
            <a class="btn btn-default color2 rounded-pill " href="{{route('ingresar')}}" role="button">Iniciar Sesión</a>
             
        </div>
        <!-- Boton Registrarse -->
        <div class="col-sm button ">
            <a class="btn btn-default color2 rounded-pill " href="{{route('registrar')}}" role="button">Registrarse</a>
        </div>

    </ul>

    </nav>
     
</div>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>