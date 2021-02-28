<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago_ordendepago;
use App\Models\Pago;
use App\Models\OrdenDePago;

class Pago_OrdenDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pago_OrdenDePago = Pago_ordendepago::all();//->where('delete',false);
        if($pago_OrdenDePago != NULL){
            return response()->json($pago_OrdenDePago);
        }
        return response()->json([
            "message"=>"No se encontró el Pago_orden de pago solicitado",
        ],404);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Correxion(error en la llave foranea id_pago)
    public function store(Request $request)
    {
        //
        $pago_OrdenDePago = new Pago_ordendepago();
        $validatedData = $request->validate([
            'id_pago' => ['require' , 'numeric'],
            'id_orden_pago' => ['require' , 'numeric']
        ]);
        
        $pago_OrdenDePago->save();
        return response()->json([
            "mesage"=>"Se ha creado una store",
            "id" => $pago_OrdenDePago->id
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
            $pago_OrdenDePago = Pago_ordendepago::find($id);
            if($pago_OrdenDePago == NULL){
                return response()->json([
                    'message'=>'No se encontro la orden de compra'
                ]);
            }
            return response()->json($pago_OrdenDePago);
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
            $pago_OrdenDePago = Pago_ordendepago::find($id);
            if($pago_OrdenDePago == NULL){
                return response()->json([
                    'message'=>'No se encontro pago_OrdenDePago'
                ]);
            }
            else{
                if($request->id_pago != NULL){
                    $pago_OrdenDePago->id_pago = $request->id_pago;
                }
                if($request->id_orden_pago != NULL){
                    $pago_OrdenDePago->id_orden_pago = $request->id_orden_pago;
                }
        
                $pago_OrdenDePago->save();
                return response()->json($pago_OrdenDePago);
            }  
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
        /*
        $pago_OrdenDePago = Pago::find($id);
        return response()->json($pago_OrdenDePago);
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
            $pago_OrdenDePago = Pago_ordendepago::find($id);
            if($pago_OrdenDePago != NULL){
                $pago_OrdenDePago->delete();
            }
            else{
                return response()->json([
                    "message" => "id pago_OrdenDePago inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Pago eliminado",
                "id"=>$pago_OrdenDePago->id
            ],201); 
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
        /*
        $pago_OrdenDePago = Pago::find($id);
        $pago_OrdenDePago->delete();
        return response()->json([
            "message"=> "Pago elimindado",
            "id"=>$pago_OrdenDePago->id
        ],201); 
        */   
    }
}
