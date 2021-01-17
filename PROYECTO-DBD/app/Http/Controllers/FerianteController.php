<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feriante;

class FerianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feriante = Feriante::all();
        return response()->json($feriante);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feriante = new Feriante();
        $feriante->$request->direccion_feriante;
        $feriante->$request->telefono_feriante;
        $feriante->$request->nombre_feriante;
        $feriante->save();
        retrun response()->json([
            "message"-> "Nueva feria agregado",
            "id"=>$feriante->id
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
        $feriante = Feriante::find($id);
        return response()->($feriante);
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
        $feriante = Feriante::find($id);
        $feriante->direccion_feriante = $request->direccion_feriante;
        $feriante->telefono_feriante = $request->telefono_feriante;
        $feriante->nombre_feriante = $request->nombre_feriante; 
        $feriante->save();
        return response()->json($feriante);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feriante->delete();
        return response()->json([
            "message"-> "Feriante elimindado",
            "id"=>$feriante->id
            ],201);
    }
}
