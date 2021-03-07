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
    public function store(Post $request)
    {
        $producto = new Producto();
        $producto->nombre_producto = $request->nombre_producto;
        $producto->precio_producto = $request->precio_producto;
        $producto->categoria = $request->categoria;
        $producto->save();
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

    public function showCategoria(Request $request)
    {
        $filtro = $request->get('categoria');
        if($filtro == NULL){
            $producto = Producto::all();
                return view('feriantes_por_producto')->with('producto',$producto);

                return response()->json([
                'message'=>'id invalido'
            ],404);
        }

        $producto = Producto::all()->where('categoria', $filtro);
        return view('feriantes_por_producto')->with('producto',$producto);
    }
    
    public function storeProducto(Request $request)
    {
        $newproducto = new Producto();
        $newproducto->nombre_producto = $request->nombre_producto;
        $newproducto->precio_producto = $request->precio_producto;
        $newproducto->categoria = $request->categoria;
        $newproducto->save();

        $producto = Producto::all();
        return redirect('productocategoria')->with('producto',$producto);
    }
}
