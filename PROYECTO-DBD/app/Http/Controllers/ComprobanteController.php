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
		
		
        //verificar las llaves foraneas
        $orden_de_pago = OrdenDePago::find($request->id_orden_de_pagos);
        if($orden_de_pago == NULL){
            return response()->json([
                'message'=>'No existe una orden de pago con esa id'
        }

		
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
		$comprobante = Comprobante::find($id);
        return response()->($comprobante);
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
        $comprobante = Comprobante::find($id);
        if($request->precio != NULL){
            $comprobante->precio = $request->precio;
        }
        if($request->tipo_de_comprobante != NULL){
            $comprobante->tipo_de_comprobante = $request->tipo_de_comprobante;
        }
		
        $comprobante->save();
        return response()->json($comprobante);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comprobante->delete();
        return response()->json([
            "message"-> "comprobante elimindado",
            "id"=>$comprobante->id
        ],201);    
    }
}
