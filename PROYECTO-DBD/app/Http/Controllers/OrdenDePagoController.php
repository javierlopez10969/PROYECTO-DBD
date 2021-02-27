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
            'fecha_de_pago' => ['required' , 'min:2' , 'max:30'],
            'tipo_pago' => ['required' , 'string'],
            'valor_total_pago' => ['required' , 'numeric'],

            'id_feriante' => ['required' , 'numeric']
        ]);
        
        $ordenDePago->fecha_de_pago = $request->fecha_de_pago;
        $ordenDePago->tipo_pago = $request->tipo_pago;
        $ordenDePago->valor_total_pago = $request->valor_total_pago;
        $ordenDePago->id_feriante = $request->id_feriante;
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
        if(is_numeric($id)){
            $ordenDePago = OrdenDePago::find($id);
            if($ordenDePago == NULL){
                return response()->json([
                    'message'=>'No se encontro la orden de pago'
                ]);
            }
            return response()->json($ordenDePago);
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
            $ordenDePago = OrdenDePago::find($id);
            if($ordenDePago == NULL){
                return response()->json([
                    'message'=>'No se encontro la orden de pago'
                ]);
            }
            else{
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
            $ordenDePago = OrdenDePago::find($id);
            if($ordenDePago != NULL){
                $ordenDePago->delete();
            }
            else{
                return response()->json([
                    "message" => "id Orden de pago inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Orden de Pago eliminada",
                "id"=>$ordenDePago->id
            ],201);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        } 
    }
}
