<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Unidad;

class ProductoController extends Controller
{
    public function index()
    {
        $producto = Producto::all()->where('delete',false);
        if($producto != NULL){
            return response()->json($producto);
        }
        return response()->json([
            "message"=>"No se encontró puesto",
        ],404);
    }


    public function store(Request $request)
    {
        //
		$producto = new Producto();
		$validateData = $request->validate([
			'precio_producto' => ['required','max:255','numeric','regex:฿₵¢₡BsB/.₫€ƒ₲Kč₭£₤₥₦₱PRℛℳ₨рубSk৲S৳R$$₸₮₩¥zł₴₪'],
			'unidad' => ['required','numeric'],
			'tipo_de_stock' => ['required','alpha_num'],
			'nombre_producto' => ['required','unique:posts','max:255'],
			'id_categoria', => ['require' , 'numeric'],
			'id_unidad', => ['require' , 'numeric']
		]);
		$categoria = Categoria::find($request->id_categoria);
        if($categoria == NULL){
            return response()->json([
                'message'=>'No existe usuario con esa id'
        }
		$unidad = Unidad::find($request->id_unidad);
        if($unidad == NULL){
            return response()->json([
                'message'=>'No existe usuario con esa id'
        }
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
		$producto = Producto::find($id);
        if($producto == NULL or $producto->delete == true){
            return response()->json([
                'message'=>'No se encontro el producto'
            ]);
        }
        return response()->json($producto);
    }

    public function update(Request $request, $id)
    {
        //
		$producto = Producto::find($id);
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
		$producto = Producto::find($id);
        if($producto != NULL){
           $producto->delete = true; 
           $producto->save();
        }
        else{
            "message" => "id Puesto inexistente"
        }
		return responde()->json([
		"message" => "Se ha borrado un nombre."
		"id" => $id
		],201);
    }
}
