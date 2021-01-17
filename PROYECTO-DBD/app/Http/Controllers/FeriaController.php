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
        return response()->json($feria);
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
        $feria->descripcion = $request->descripcion;
        $feria->horario_desde = $request->horario_desde;
        $feria->horario_hasta = $request->horario_hasta; 
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
