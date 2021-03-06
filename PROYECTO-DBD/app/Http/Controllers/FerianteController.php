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

        $feriante->direccion_feriante = $request->direccion_feriante;
        $feriante->telefono_feriante = $request->telefono_feriante;
        $feriante->nombre_feriante = $request->nombre_feriante;
        $feriante->save();
        return response()->json([
            "message"=> "Nuevo feriante agregado",
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
        if(is_numeric($id)){
            $feriante = Feriante::find($id);
            if($feriante == NULL){
                return response()->json([
                    'message'=>'No se encontro el feriante'
                ]);
            }
            return response()->json($feriante);
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
            $feriante = Feriante::find($id);
            if($feriante == NULL){
                return response()->json([
                    'message'=>'No se encontro el feriante'
                ]);
            }
            else{
                if($request->direccion_feriante != NULL){
                    $feriante->direccion_feriante = $request->direccion_feriante;
                }
                if($request->telefono_feriante != NULL){
                    $feriante->telefono_feriante = $request->telefono_feriante;
                }
                if($request->nombre_feriante != NULL){
                    $feriante->nombre_feriante = $request->nombre_feriante;
                }
                $feriante->save();
                return response()->json($feriante);
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
            $feriante = Feriante::find($id);
            if($feriante != NULL){
                $feriante->delete();
            }
            else{
                return response()->json([
                    "message" => "id Feriante inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Feriante eliminado",
                "id"=>$feriante->id
            ],201);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }

    public function showFeriante()
    {
        $feriante = Feriante::all();
        return view('addferiante_fav')->with('feriante',$feriante);
    }
}
