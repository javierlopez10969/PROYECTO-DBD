<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidad;

class UnidadController extends Controller
{
    public function index()
    {
        //
        $unidad = Unidad::all();//->where('delete',false);
        if($unidad!= NULL){
            return response()->json($unidad);
        }
        return response()->json([
            "message"=>"No se encontró esta unidad",
        ],404);
    }

    public function store(Request $request)
    {
        //
        $unidad = new Unidad();
		$validateData = $request->validate([
			'cantidad' => ['required','numeric'],
			'tipo_cantidad' => ['required']
		]);
		
		$unidad->cantidad = $request->cantidad;
		$unidad->tipo_cantidad = $request->tipo_cantidad;
		//$puesto->delete = $request->delete;
		$unidad->save();
		return response()->json([
            "message" => "Se ha asignado una nueva unidad.",
            "id" => $unidad->id
		],202);
	}


    public function show($id)
    {
        //
        if(is_numeric($id)){
            $unidad = Unidad::find($id);
            if($unidad == NULL or $unidad->delete == true){
                return response()->json([
                    'message'=>'No se encontro esta unidad.'
                ]);
            }
            return response()->json($unidad);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }

    public function update(Request $request, $id)
    {
        //
		if(is_numeric($id)){
            $unidad = Unidad::find($id);
            if($unidad == NULL){
                return response()->json([
                    'message'=>'No se encontro la unidad'
                ]);
            }
            else{
                if($request->cantidad != NULL){
                    $unidad->cantidad = $request->cantidad;
                }
                if($request->tipo_cantidad != NULL){
                    $unidad->tipo_cantidad = $request->tipo_cantidad;
                }
                if($request->delete != NULL){
                    $puesto->delete = $request->delete;
                }
                $unidad->save();
                return response()->json($unidad);
            }  
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }

    public function destroy($id)
    {
        //
		if(is_numeric($id)){
            $unidad = Unidad::find($id);
            if($unidad != NULL){
                $unidad->delete();
            }
            else{
                return response()->json([
                    "message" => "id Unidad inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Unidad eliminada",
                "id"=>$unidad->id
            ],201);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
}
