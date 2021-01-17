<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comuna;

class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comuna = Comuna::all();
        return response()->json($comuna);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $comuna = new Comuna();
        $comuna->$request->descripcion;
        $comuna->$request->horario_desde;
        $comuna->$request->horario_hasta;
        $comuna->save();
        retrun response()->json([
            "message"-> "Nueva comuna agregada",
            "id"=>$comuna->id
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
        $comuna = Comuna::find($id);
        return response()->($comuna);
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
        $comuna = Comuna::find($id);
        $comuna->descripcion = $request->descripcion;
        $comuna->horario_desde = $request->horario_desde;
        $comuna->horario_hasta = $request->horario_hasta; 
        $comuna->save();
        return response()->json($comuna);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comuna->delete();
        return response()->json([
            "message"-> "comuna elimindada",
            "id"=>$comuna->id
            ],201);    }
}
