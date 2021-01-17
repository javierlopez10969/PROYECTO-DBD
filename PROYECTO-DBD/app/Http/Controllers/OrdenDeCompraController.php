<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdenDeCompraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ordenDeCompra = Orden_de_compra::all()->where('delete',false);
        if($ordenDeCompra != NULL){
            return response()->json($ordenDeCompra);
        }
        return response()->json([
            "message"=>"No se encontró la orden de compra solicitada",
        ],404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ordenDeCompra = new Orden_de_compra();
        $validatedData = $request->validate([
            'fecha_pago' => ['require' , 'min:2' , 'max:30'],
            'cantidad_elementos_orden' => ['require' , 'numeric'],
            'estado_de_pago' => ['require' , 'boolean'],
            'id_cliente' => ['require' , 'numeric']
        ]);
        
        $feriante = Feriante::find($request->id_cliente);
        if ($pago == NULL){
            return response()->json([
                'message'=>'No existe usuario con esa id'
        }
        $ordenDeCompra->fecha_pago = $request->fecha_pago;
        $ordenDeCompra->cantidad_elementos_orden = $request->cantidad_elementos_orden;
        $ordenDeCompra->estado_de_pago = $request->estado_de_pago;
        $ordenDeCompra->save();
        return response()->json([
        "mesage"=>"Se ha creado una store",
        "id" => $ordenDeCompra->id
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
        $ordenDeCompra = Orden_de_compra::find($id);
        if($ordenDeCompra == NULL){
            return response()->json([
                'message'=>'No se encontro la orden de compra'
            ]);
        }
        return response()->json($ordenDeCompra);
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
        $ordenDeCompra = Orden_de_compra::find($id);
        if($request->fecha_pago != NULL){
            $ordenDeCompra->categoria = $request->fecha_pago;
        }
        if($request->cantidad_elementos_orden != NULL){
            $ordenDeCompra->cantidad_elementos_orden = $request->cantidad_elementos_orden;
        }
        if($request->estado_de_pago != NULL){
            $ordenDeCompra->estado_de_pago = $request->estado_de_pago;
        }
        $ordenDeCompra->save();
        return response()->json($ordenDeCompra);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ordenDeCompra = Orden_de_compra::find($id);
        $ordenDeCompra->delete();
        return response()->json([
            "message"-> "orden de compra elimindada",
            "id"=>$ordenDeCompra->id
            ],201);    
        }
    }

}
