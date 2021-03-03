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
        $producto = Producto::all();//->where('delete',false);
        if($producto != NULL){
            return response()->json($producto);
        }
        return response()->json([
            "message"=>"No se encontró puesto",
        ],404);
    }

    //Correxion (no se genera la tupla)
    public function store(Request $request)
    {
        //
		$producto = new Producto();
        
		$validateData = $request->validate([
            'precio_producto' => ['required','numeric'],
            'unidad' => ['required','numeric'],
            'tipo_de_stock' => ['required','boolean'],
            'nombre_producto' => ['required','string','max:500'],

			'id_categoria' => ['required' , 'numeric'],
			'id_unidad' => ['required' , 'numeric']
		]);

		$producto->precio_producto = $request->precio_producto;
		$producto->unidad = $request->unidad;
		$producto->tipo_de_stock = $request->tipo_de_stock;
		$producto->nombre_producto = $request->nombre_producto;
		$producto->id_categoria = $request->id_categoria;
		$producto->id_unidad = $request->id_unidad;

		$producto->save();
		return response()->json([
            "message" => "Se ha creado un producto.",
            "id" => $producto->id
		],202);
	}


    public function show($id)
    {
		if(is_numeric($id)){
            $producto = Producto::find($id);
            $d = Producto::all();
            if($producto == NULL or $producto->delete == true){
                return response()->json([
                    'message'=>'No se encontro el producto'
                ]);
            }
            return view('pagina_compra',compact('producto'));
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }

    public function update(Request $request, $id)
    {
        //
		if(is_numeric($id)){
            $producto = Producto::find($id);
            if($producto == NULL){
                return response()->json([
                    'message'=>'No se encontro el producto'
                ]);
            }
            else{
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
                return response()->json($producto);
            }  
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }

    public function destroy($id)
    {
        //
		if(is_numeric($id)){
            $producto = Producto::find($id);
            if($producto != NULL){
                $producto->delete();
            }
            else{
                return response()->json([
                    "message" => "id producto inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "producto eliminado",
                "id"=>$producto->id
            ],201);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
}
