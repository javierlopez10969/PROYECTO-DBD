<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidad;

class UnidadController extends Controller
{
    public function index()
    {
        //
        $unidad = Unidad::all()->where('delete',false);
        if($puesto != NULL){
            return response()->json($unidad);
        }
        return response()->json([
            "message"=>"No se encontró esta unidad",
        ],404);
    }


    public function store(Request $request)
    {
        //
		$validateData = $request->validate([
			'cantidad' => ['required','numeric'],
			'tipo_cantidad' => ['required','unique:posts'];
		]);
		$unidad = new Unidad();
		$unidad->cantidad = $request->cantidad;
		$unidad->tipo_cantidad = $request->tipo_cantidad;
		$puesto->delete = $request->delete;
		$unidad->save();
		return responde()->json([
		"message" => "Se ha creado asignar esta unidad."
		"id" => $unidad->id
		],202);
	}


    public function show($id)
    {
        //
        $unidad = Unidad:find($id);
        if($unidad == NULL or $unidad->delete == true){
            return response()->json([
                'message'=>'No se encontro esta unidad.'
            ]);
        }
        return response()->json($unidad);
    }

    public function update(Request $request, $id)
    {
        //
		$unidad = Unidad::find($id)
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
		return responde()->json($unidad);
    }

    public function destroy($id)
    {
        //
		$unidad = Unidad::find($id)
		if($unidad != Null){
			$unidad->delete();
			$puesto->save();
		}
		else{
            "message" => "id Puesto inexistente"
        }
		return responde()->json([
		"message" => "Se ha borrado asignar esta unidad."
		"id" => $id
		],201);
    }
}
