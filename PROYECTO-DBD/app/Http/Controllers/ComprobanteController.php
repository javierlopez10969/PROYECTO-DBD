<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comprobante;
use App\Models\OrdenDePago;

class ComprobanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //
        $comprobante = Comprobante::all();
        if($comprobante != NULL){
            return response()->json($comprobante);
        }
        return response()->json([
            "message"=>"No se encontró el comprobante",
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
        $comprobante = new Comprobante();
        $validatedData = $request->validate([
            'precio' => ['required' ,'numeric'],
            'tipo_de_comprobante' => ['required' , 'min:2' , 'max:50'],
			
            'id_orden_de_pagos' => ['required' , 'numeric']
        ]);
		
        $comprobante->precio = $request->precio;
        $comprobante->tipo_de_comprobante = $request->tipo_de_comprobante;		
        $comprobante->save();
        return response()->json([
			"message"=>"Se ha creado un comprobante",
			"id" => $comprobante->id
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
            $comprobante = Comprobante::find($id);
            if($comprobante == NULL){
                return response()->json([
                    'message'=>'No se encontro el comprobante'
                ]);
            }
            return response()->json($comprobante);
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
            $comprobante = Comprobante::find($id);
            if($comprobante == NULL){
                return response()->json([
                    'message'=>'No se encontro el comprobante'
                ]);
            }
            else{
                if($request->precio != NULL){
                    $comprobante->precio = $request->precio;
                }
                if($request->tipo_de_comprobante != NULL){
                    $comprobante->tipo_de_comprobante = $request->tipo_de_comprobante;
                }
                
                $comprobante->save();
                return response()->json($comprobante);
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
            $comprobante = Comprobante::find($id); 
            if($comprobante != NULL){
                $comprobante->delete();
            }
            else{
                return response()->json([
                    "message" => "id Comprobante inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "comprobante eliminado",
                "id"=>$comprobante->id
            ],201);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }   
    }
}
