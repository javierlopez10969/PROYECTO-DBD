<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feria;
use App\Models\Comuna;

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
            'horario_desde' => ['required'],
            'horario_hasta' => ['required'],
            
            'id_comuna' => ['required' , 'numeric']
        ]);        

        $feria->descripcion = $request->descripcion;
        $feria->horario_desde = $request->horario_desde;
        $feria->horario_hasta = $request->horario_hasta;
        $feria->save();
        return response()->json([
            "message"=> "Nueva feria agregada",
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
        if(is_numeric($id)){
            $feria = Feria::find($id);
            if($feria == NULL){
                return response()->json([
                    'message'=>'No se encontro la feria'
                ]);
            }
            return response()->json($feria);
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
            $feria = Feria::find($id);
            if($feria == NULL){
                return response()->json([
                    'message'=>'No se encontro la feria'
                ]);
            }
            else{
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
            $feria = Feria::find($id);
            if($feria != NULL){
                $feria->delete();
            }
            else{
                return response()->json([
                    "message" => "id Feria inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Feria eliminada",
                "id"=>$feria->id
                ],201);  
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
    public function showComuna(Request $request)
    {
        $filtro = $request->get('nombre_comuna');
        if($filtro == NULL){
            $feria = Feria::all();
                return view('feria_por_region')->with('feria',$feria);

                return response()->json([
                'message'=>'id invalido'
            ],404);
        }

        $feria = Feria::all()->where('nombre_comuna', $filtro);
        return view('feria_por_region')->with('feria',$feria);
    }
}
