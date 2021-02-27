<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenDeCompra;
use App\Models\Feriante;

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
        $ordenDeCompra = OrdenDeCompra::all()->where('delete',false);
        if($ordenDeCompra != NULL){
            return response()->json($ordenDeCompra);
        }
        return response()->json([
            "message"=>"No se encontró la orden de compra solicitada"
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
        $ordenDeCompra = new OrdenDeCompra();
        $validatedData = $request->validate([
            'fecha_de_pago' => ['required' , 'min:2' , 'max:30'],
            'cantidad_elementos_orden' => ['required' , 'numeric'],
            'estado_de_pago' => ['required' , 'boolean'],
            'id_cliente' => ['required' , 'numeric']
        ]);
        
        $ordenDeCompra->fecha_de_pago = $request->fecha_de_pago;
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
        if(is_numeric($id)){
            $ordenDeCompra = OrdenDeCompra::find($id);
            if($ordenDeCompra == NULL){
                return response()->json([
                    'message'=>'No se encontro la orden de compra'
                ]);
            }
            return response()->json($ordenDeCompra);
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
            $ordenDeCompra = OrdenDeCompra::find($id);
            if($ordenDeCompra == NULL){
                return response()->json([
                    'message'=>'No se encontro la orden de compra'
                ]);
            }
            else{
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
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
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
            $ordenDeCompra = OrdenDeCompra::find($id);
            if($ordenDeCompra != NULL){
                $ordenDeCompra->delete();
            }
            else{
                return response()->json([
                    "message" => "id Orden de compra inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "orden de compra elimindada",
                "id"=>$ordenDeCompra->id
            ],201);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }   
    }

}
