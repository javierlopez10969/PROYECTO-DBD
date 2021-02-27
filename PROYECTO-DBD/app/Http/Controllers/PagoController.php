<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago;
use App\Models\OrdenDeCompra;

class PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pago = Pago::all()->where('delete',false);
        if($pago != NULL){
            return response()->json($pago);
        }
        return response()->json([
            "message"=>"No se encontró el pago solicitado",
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
        $pago = new Pago();
        $validatedData = $request->validate([
            'fecha_de_pago' => ['require' , 'min:2' , 'max:30'],
            'tipo_pago' => ['require' , 'numeric'],
            'valor_pago' => ['require' , 'numeric'],
            'id_orden_compra' => ['require' , 'numeric']
        ]);
        /*
        $orden_compra = OrdenDeCompra::find($request->id_pago);
        if ($pago == NULL){
            return response()->json([
                'message'=>'No existe usuario con esa id']);
        }
        */

        $pago->fecha_de_pago = $request->fecha_de_pago;
        $pago->tipo_pago = $request->tipo_pago;
        $pago->valor_pago = $request->valor_pago;
        $pago->save();
        return response()->json([
        "mesage"=>"Se ha creado una store",
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
            $pago = Pago::find($id);
            if($pago == NULL){
                return response()->json([
                    'message'=>'No se encontro el pago'
                ]);
            }
            return response()->json($pago);
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
            $pago = Pago::find($id);
            if($pago == NULL){
                return response()->json([
                    'message'=>'No se encontro el pago'
                ]);
            }
            else{
                if($request->fecha_de_pago != NULL){
                    $pago->categoria = $request->fecha_de_pago;
                }
                if($request->tipo_pago != NULL){
                    $pago->tipo_pago = $request->tipo_pago;
                }
                if($request->valor_pago != NULL){
                    $pago->valor_pago = $request->valor_pago;
                }
                $pago->save();
                return response()->json($pago);
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
            $pago = Pago::find($id);
            if($pago != NULL){
                $pago->delete();
            }
            else{
                return response()->json([
                    "message" => "id pago inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "pago eliminado",
                "id"=>$pago->id
            ],201);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
}
