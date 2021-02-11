<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pago_ordendepago;
use App\Models\Pago;
#use App\Models\Orden_de_pago;
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
        $pago_OrdenDePago = Pago_ordendepago::all()->where('delete',false);
        if($pago_OrdenDePago != NULL){
            return response()->json($pago_OrdenDePago);
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
    public function store(Request $request)
    {
        //
        $pago_OrdenDePago = new Pago_ordendepago();
        $validatedData = $request->validate([
            'id_pago' => ['require' , 'numeric'],
            'id_orden_pago' => ['require' , 'numeric']
        ]);
        
        $pago= Pago::find($request->id_pago);
        if ($producto == NULL){
            return response()->json([
                'message'=>'No existe usuario con esa id']);
        }
        #$orden_de_pago = Orden_de_pago::find($request->id_orden_pago);
        $orden_de_pago = OrdenDePago::find($request->id_orden_pago);
        if ($orden_de_pago == NULL){
            return response()->json([
                'message'=>'No existe usuario con esa id']);
        }
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
        $pago_OrdenDePago = Pago::find($id);
        if($pago_OrdenDePago == NULL){
            return response()->json([
                'message'=>'No se encontro la orden de compra'
            ]);
        }
        return response()->json($pago_OrdenDePago);
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
        $pago_OrdenDePago = Pago::find($id);
        return response()->json($pago_OrdenDePago);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pago_OrdenDePago = Pago::find($id);
        $pago_OrdenDePago->delete();
        return response()->json([
            "message"-> "Pago elimindado",
            "id"=>$pago_OrdenDePago->id
            ],201);    
        }
    }
}
