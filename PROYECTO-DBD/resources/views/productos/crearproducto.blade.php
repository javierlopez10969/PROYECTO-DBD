@extends('layouts.main')


@section('seccion')

<div class="row text-center">
    <div class="col">
    </div>
    <div class="col text-center ">
        <div class="container-fluid ventana">
            <a href="/"><img src="https://i.ibb.co/RQKpgvv/logo.png" alt="logo" ></a>
            <form action="/productonuevo" method="POST">
                @csrf
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <h4 class="card-title text-center">Añadir Nuevo Producto</h4>                        
                        <!--Nombre del usuario OK-->
                        <div class="form-group input-group">                            
                                <input id="nombre_producto" placeholder="Nombre del producto" type="text" class="form-control rounded-pill @error('nombre_producto') is-invalid @enderror" name="nombre_producto" value="{{ old('nombre_producto') }}" required autocomplete="nombre_producto" autofocus>                          
                        </div>
                        <div class="form-group input-group rounded-pill">
                            <select id="categoria" class="form-control rounded-pill @error('categoria') is-invalid @enderror" name="categoria" value="{{ old('categoria') }}" placeholder="Seleccionar tipo de usuario" required="" autocomplete="rol">
                                <option hidden selected disabled value="">Categoria </option>
                                <option>Frutas</option>
                                <option>Verduras</option>
                                <option>Pollo</option>
                                <option>Carne y Pescado</option>
                                <option>Huevos</option>
                                <option>Artículos de Aseo</option>
                                <option>Alimento para Mascotas</option>
                                <option>Otros</option>
                            </select>
                        </div> 

                        <div class="form-group input-group">
                            <input id="precio_producto" name="precio_producto" class="form-control rounded-pill @error('precio_producto') is-invalid @enderror" value="{{ old('precio_producto') }}" placeholder="Precio" type="number">
                        </div>                     

                        <!--Botón de publicar-->
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-lg color4 rounded-pill text-center">
                                {{ __('Publicar Producto') }}
                            </button>
                        </div>      

                      
                <div class = "end-100 bottom text-center padding_up">
                    <p class="padding_up text-muted ">FERION - Ferias Online - 2021</p>
                </div> 
                </article>
            </form>
        </div>

    </div>

    <div class="col">
    </div>

</div>

<style>
    html,
    body {

        background: linear-gradient(0deg, #A7C957 -12.51%, rgba(255, 255, 255, 0) 85.81%), #F9F6F7;        
    }
</style>

@endsection