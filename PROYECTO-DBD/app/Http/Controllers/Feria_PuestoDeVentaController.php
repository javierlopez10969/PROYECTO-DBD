<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feria_PuestoDeVenta;
use App\Models\Feria;
use App\Models\PuestoDeVenta;


class Feria_PuestoDeVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feria_PuestoDeVenta = Feria_PuestoDeVenta::all();
        if($feria_PuestoDeVenta != NULL){
            return response()->json($feria_PuestoDeVenta);
        }
        return response()->json([
            "message"=>"No se encontró la feria_PuestoDeVenta",
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
        $feria_PuestoDeVenta = new Feria_PuestoDeVenta();
        $validatedData = $request->validate([
            'id_feria' => ['require' , 'numeric'],
            'id_puesto_venta'=> ['require' , 'numeric'],
        ]); 
        
        $feria_PuestoDeVenta->save();
        return response()->json([
            "message"=> "Nueva feria_PuestoDeVenta agregada",
            "id"=>$feria_PuestoDeVenta->id
        ],201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(is_numeric($id)){
            $feria_PuestoDeVenta = Feria_PuestoDeVenta::find($id);
            if($feria_PuestoDeVenta == NULL){
                return response()->json([
                    'message'=>'No se encontro la Feria_Puesto de venta'
                ]);
            }
            return response()->json($feria_PuestoDeVenta);
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
            $feria_PuestoDeVenta = Feria_PuestoDeVenta::find($id);
            if($feria_PuestoDeVenta == NULL){
                return response()->json([
                    'message'=>'No se encontro la Feria_puesto de venta'
                ]);
            }
            else{
                if($request->id_puesto_venta != NULL){
                    $feria_PuestoDeVenta->id_puesto_venta = $request->id_puesto_venta;
                }
                if($request->id_feria != NULL){
                    $feria_PuestoDeVenta->id_feria = $request->id_feria;
                }
                $feria_PuestoDeVenta->save();
                return response()->json($feria_PuestoDeVenta);
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
            $feria_PuestoDeVenta = Feria_PuestoDeVenta::find($id);
            if($feria_PuestoDeVenta != NULL){
                $feria_PuestoDeVenta->delete();
            }
            else{
                return response()->json([
                    "message" => "id feria_PuestoDeVenta inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Feria_PuestoDeVenta eliminada",
                "id"=>$feria_PuestoDeVenta->id
            ],201); 
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
}
