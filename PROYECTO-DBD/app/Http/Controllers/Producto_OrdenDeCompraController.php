<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos_orden_de_compra;
use App\Models\Producto;
use App\Models\Feriante;


class Producto_OrdenDeCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $producto_ordenDeCompra = Productos_orden_de_compra::all()->where('delete',false);
        if($producto_ordenDeCompra != NULL){
            return response()->json($producto_ordenDeCompra);
        }
        return response()->json([
            "message"=>"No se encontró el Productos_orden_de_compra solicitado",
        ],404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Correxion
    public function store(Request $request)
    {
        //
        $producto_ordenDeCompra = new Productos_orden_de_compra();
        $validatedData = $request->validate([
            'id_orden_compra' => ['required' , 'numeric'],
            'id_producto' => ['required' , 'numeric']
        ]);
        /*
        $producto = Producto::find($request->id_producto);
        if ($producto == NULL){
            return response()->json([
                'message'=>'No existe usuario con esa id']);
        }
        $feriante = Feriante::find($request->id_feriante);
        if ($producto_ordenDeCompra == NULL){
            return response()->json([
                'message'=>'No existe usuario con esa id']);
        }
        $producto_ordenDeCompra->save();
        return response()->json([
            "mesage"=>"Se ha creado una store",
            "id" => $producto_ordenDeCompra->id
        ],202);*/
        $producto_ordenDeCompra->save();
        return response()->json([
            "mesage"=>"Se ha creado una producto_ordenDeCompra nuevo",
            "id" => $pago->id
        ],202);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        if(is_numeric($id)){
            $producto_ordenDeCompra = Productos_orden_de_compra::find($id);
            if($producto_ordenDeCompra == NULL){
                return response()->json([
                    'message'=>'No se encontro la orden de compra'
                ]);
            }
            return response()->json($producto_ordenDeCompra);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(is_numeric($id)){
            $producto_ordenDeCompra = Productos_orden_de_compra::find($id);
            if($producto_ordenDeCompra == NULL){
                return response()->json([
                    'message'=>'No se encontro el producto_orden de compra'
                ]);
            }
            else{
                if($request->id_orden_compra != NULL){
                    $producto_ordenDeCompra->id_orden_compra = $request->id_orden_compra;
                }
                if($request->id_producto != NULL){
                    $producto_ordenDeCompra->id_producto = $request->id_producto;
                }
        
                $producto_ordenDeCompra->save();
                return response()->json($producto_ordenDeCompra);
            }  
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
        /*
        $producto_ordenDeCompra = Productos_orden_de_compra::find($id);
        return response()->json($producto_ordenDeCompra);
        */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(is_numeric($id)){
            $producto_ordenDeCompra = Productos_orden_de_compra::find($id);
            if($producto_ordenDeCompra != NULL){
                $producto_ordenDeCompra->delete();
            }
            else{
                return response()->json([
                    "message" => "id producto_OrdenDeCompra inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Productos_orden_de_compra eliminada",
                "id"=>$producto_ordenDeCompra->id
            ],201); 
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
        /*
        $producto_ordenDeCompra = Productos_orden_de_compra::find($id);
        $producto_ordenDeCompra->delete();
        return response()->json([
            "message"-> "Productos_orden_de_compra elimindada",
            "id"=>$producto_ordenDeCompra->id
            ],201);    
        }*/
    }
}
