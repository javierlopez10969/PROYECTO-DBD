<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index()
    {
        $producto = Producto::all();
		return responde()->json($producto);
    }


    public function store(Request $request)
    {
        //
		$validateData = $request->validate([
			'precio_producto' => ['required','max:255'],
			'unidad' => ['required'],
			'tipo_de_stock' => ['required'],
			'nombre_producto' => ['required','unique:posts','max:255'];
		]);
		$producto = new Producto();
		$producto->precio_producto = $request->precio_producto;
		$producto->unidad = $request->unidad;
		$producto->tipo_de_stock = $request->tipo_de_stock;
		$producto->nombre_producto = $request->nombre_producto;
		$producto->save();
		return responde()->json([
		"message" => "Se ha creado un producto."
		"id" => $producto->id
		],202);
	}


    public function show($id)
    {
		$producto = Producto::find($id)
		return responde()->json($producto);
    }

    public function update(Request $request, $id)
    {
        //
		$producto = Producto::find($id)
		if($request->precio_producto != NULL){
			$producto->precio_producto = $request->precio_producto;
		}
		if($request->unidad != NULL){
			$producto->unidad = $request->unidad;
		}
		if($request->tipo_de_stock != NULL){
			$producto->tipo_de_stock = $request->tipo_de_stock;
		}
		if($request->nombre_producto != NULL){
			$producto->nombre_producto = $request->nombre_producto;
		}
		$producto->save();
		return responde()->json($producto);
    }

    public function destroy($id)
    {
        //
		$producto = Producto::find($id)
		if($producto != Null){
			$producto->delete();
		}
		return responde()->json([
		"message" => "Se ha borrado un nombre."
		"id" => $id
		],201);
    }
}
