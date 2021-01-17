<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feria;

class FeriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feria = Feria::all();
        if($feria != NULL){
            return response()->json($feria);
        }
        return response()->json([
            "message"=>"No se encontró la feria",
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
        $feria = new Feria();
        $validatedData = $request->validate([
            'descripcion' => ['required' ,'string'],
            'horario_desde' => ['required' , 'date(h:m:s)'],
            'horario_hasta' => ['required' , 'date(h:m:s)'],
            
            'id_comuna' => ['required' , 'numeric'],
        ]);        

        $comuna = Comuna::find($request->id_comuna);
        if($comuna == NULL){
            return response()->json([
                'message'=>'No existe un comuna con esa id'
                ],404)
            }

        $feria->$request->descripcion;
        $feria->$request->horario_desde;
        $feria->$request->horario_hasta;
        $feria->save();
        retrun response()->json([
            "message"-> "Nueva feria agregada",
            "id"=>$feria->id
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
        $feria = Feria::find($id);
        return response()->($feria);
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
        $feria = Feria::find($id);
        if($request->descripcion != NULL){
            $feria->descripcion = $request->descripcion;
        }
        if($request->horario_desde != NULL){
            $feria->horario_desde = $request->horario_desde;
        }
        if($request->horario_hasta != NULL){
            $feria->horario_hasta = $request->horario_hasta;
        }
        $feria->save();
        return response()->json($feria);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feria->delete();
        return response()->json([
            "message"-> "Feria elimindada",
            "id"=>$feria->id
            ],201);
    }
}
