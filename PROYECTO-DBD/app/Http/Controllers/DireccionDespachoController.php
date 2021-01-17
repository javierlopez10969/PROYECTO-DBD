<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Direccion_despacho;
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
        $direccion_despacho = Direccion_despacho::all();
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
        $direccion_despacho = new Direccion_despacho();
        $validatedData = $request->validate([
            'direccion' => ['required' , 'min:2' , 'max:150'],
			
			'id_cliente' => ['required' , 'numeric'],
            'id_orden_despacho' => ['required' , 'numeric'],
            'id_comuna' => ['required' , 'numeric']
        ]);
		
		
        //verificar las llaves foraneas
        $cliente = Cliente::find($request->id_cliente);
        if($cliente == NULL){
            return response()->json([
                'message'=>'No existe un cliente con esa id'
        }
        $orden_de_despacho = OrdenDeDespacho::find($request->id_orden_despacho);
        if($orden_de_despacho == NULL){
            return response()->json([
                'message'=>'No existe una orden de espacho con esa id'
        }
        $comuna = Comuna::find($request->id_comuna);
        if($comuna == NULL){
            return response()->json([
                'message'=>'No existe comuna con esa id'
        }
		
		
		
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
        $direccion_despacho = Direccion_despacho::find($id);
        return response()->($direccion_despacho);
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
        $direccion_despacho = Direccion_despacho::find($id);
        if($request->direccion != NULL){
            $direccion_despacho->direccion = $request->direccion;
        }
        $direccion_despacho->save();
        return response()->json($direccion_despacho);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $direccion_despacho->delete();
        return response()->json([
            "message"-> "direccion de despacho eliminado",
            "id"=>$direccion_despacho->id
        ],201);    
    }
}
