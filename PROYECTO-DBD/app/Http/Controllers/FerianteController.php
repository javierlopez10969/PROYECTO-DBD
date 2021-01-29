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
        if($feriante != NULL){
            return response()->json($feriante);
        }
        return response()->json([
            "message"=>"No se encontró el Feriante",
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
        $feriante = new Feriante();
            $validatedData = $request->validate([
            'direccion_feriante' => ['required' ,'string'],
            'telefono_feriante' => ['required' , 'string'],
            'nombre_feriante' => ['required' , 'string'],
        ]);        

        $feriante = Feriante::find($request->id_feriante);
        if($feriante == NULL){
            return response()->json([
                'message'=>'No existe un feriante con esa id'
            ],404)
        }

        $feriante->$request->direccion_feriante;
        $feriante->$request->telefono_feriante;
        $feriante->$request->nombre_feriante;
        $feriante->save();
        retrun response()->json([
            "message"-> "Nueva feriante agregado",
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

       if($request->direccion_feriante != NULL){
            $feria->direccion_feriante = $request->direccion_feriante;
        }
        if($request->telefono_feriante != NULL){
            $feria->telefono_feriante = $request->telefono_feriante;
        }
        if($request->nombre_feriante != NULL){
            $feria->nombre_feriante = $request->nombre_feriante;
        }

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
