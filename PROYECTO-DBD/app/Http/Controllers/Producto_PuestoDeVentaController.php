<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto_PuestoDeVenta;

class Producto_PuestoDeVentaController extends Controller
{
    public function index()
    {
        $producto_PuestoDeVenta = Producto_PuestoDeVenta::all();
		return responde()->json($producto_PuestoDeVenta);
    }


    public function show($id)
    {
		$producto_PuestoDeVenta = Producto_PuestoDeVenta::find($id)
		return responde()->json($producto_PuestoDeVenta);
    }

}
