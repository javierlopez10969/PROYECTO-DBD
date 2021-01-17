<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenDePago;
use App\Models\Pago;
use App\Models\Feriante;


class OrdenDePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ordenDePago = OrdenDePago::all()->where('delete',false);
        if($ordenDePago != NULL){
            return response()->json($ordenDePago);
        }
        return response()->json([
            "message"=>"No se encontró la orden de pago solicitada",
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
        $ordenDePago = new OrdenDePago();
        $validatedData = $request->validate([
            'fecha_de_pago' => ['require' , 'min:2' , 'max:30'],
            'tipo_pago' => ['require' , 'numeric'],
            'valor_total_pago' => ['require' , 'numeric'],
            'id_feriante' => ['require' , 'numeric']
        ]);
        
        $feriante = Feriante::find($request->id_feriante);
        if ($pago == NULL){
            return response()->json([
                'message'=>'No existe usuario con esa id']);
        }
        $ordenDePago->fecha_de_pago = $request->fecha_de_pago;
        $ordenDePago->tipo_pago = $request->tipo_pago;
        $ordenDePago->valor_total_pago = $request->valor_total_pago;
        $ordenDePago->save();
        return response()->json([
        "mesage"=>"Se ha creado una store",
        "id" => $ordenDePago->id
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
        $ordenDePago = OrdenDePago::find($id);
        if($ordenDePago == NULL){
            return response()->json([
                'message'=>'No se encontro la orden de pago'
            ]);
        }
        return response()->json($ordenDePago);
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
        $ordenDePago = OrdenDePago::find($id);
        if($request->fecha_de_pago != NULL){
            $ordenDePago->categoria = $request->fecha_de_pago;
        }
        if($request->tipo_pago != NULL){
            $ordenDePago->tipo_pago = $request->tipo_pago;
        }
        if($request->valor_total_pago != NULL){
            $ordenDePago->valor_total_pago = $request->valor_total_pago;
        }
        $ordenDePago->save();
        return response()->json($ordenDePago);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ordenDePago = OrdenDePago::find($id);
        $ordenDePago->delete();
        return response()->json([
            "message"-> "Orden de Pago elimindada",
            "id"=>$ordenDePago->id ]
            ,201); 
        
    }
}
