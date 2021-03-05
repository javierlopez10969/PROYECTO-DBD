<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DireccionDespacho;
use App\Models\Cliente;
use App\Models\Comuna;
use App\Models\OrdenDeDespacho;

class DireccionDespachoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $direccion_despacho = DireccionDespacho::all();
        if($direccion_despacho != NULL){
            return response()->json($direccion_despacho);
        }
        return response()->json([
            "message"=>"No se encontró la direccion de despacho",
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
        $direccion_despacho = new DireccionDespacho();
        $validatedData = $request->validate([
            'direccion' => ['required' , 'min:2' , 'max:150'],
			
			'id_cliente' => ['required' , 'numeric'],
            'id_orden_despacho' => ['required' , 'numeric'],
            'id_comuna' => ['required' , 'numeric']
        ]);
		
        $direccion_despacho->direccion = $request->direccion;
        $direccion_despacho->save();
        return response()->json([
			"message"=>"Se ha creado una cuenta direccion de despacho",
			"id" => $direccion_despacho->id
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
        if(is_numeric($id)){
            $direccion_despacho = DireccionDespacho::find($id);
            if($direccion_despacho == NULL){
                return response()->json([
                    'message'=>'No se encontro la direccion de despacho'
                ]);
            }
            return response()->json($direccion_despacho);
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
            $direccion_despacho = DireccionDespacho::find($id);
            if($direccion_despacho == NULL){
                return response()->json([
                    'message'=>'No se encontro la direccion de despacho'
                ]);
            }
            else{
                if($request->direccion != NULL){
                    $direccion_despacho->direccion = $request->direccion;
                }
                $direccion_despacho->save();
                return response()->json($direccion_despacho);
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
            $direccion_despacho = DireccionDespacho::find($id);
            if($direccion_despacho != NULL){
                $direccion_despacho->delete();
            }
            else{
                return response()->json([
                    "message" => "id Direccion despacho inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "direccion de despacho eliminado",
                "id"=>$direccion_despacho->id
            ],201); 
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }   
    }
}
