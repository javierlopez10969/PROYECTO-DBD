@extends('layouts.main')

@section('seccion')

<div class="container-fluid">    

    <a class="btn  btn-lg color2 rounded-pill " role="button" href="{{ url('nuevo_producto') }}">{{ __('Añadir un Producto') }}</a>
    <h1>
        Estos son sus productos
    </h1>
    <div class="ventana">

    </div>
</div>

<style>

</style>
@endsection