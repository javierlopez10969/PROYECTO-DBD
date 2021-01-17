<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidad;

class UnidadController extends Controller
{
    public function index()
    {
        $unidad = Unidad::all();
		return responde()->json($unidad);
    }


    public function store(Request $request)
    {
        //
		$validateData = $request->validate([
			'cantidad' => ['required'],
			'tipo_cantidad' => ['required','unique:posts'];
		]);
		$unidad = new Unidad();
		$unidad->cantidad = $request->cantidad;
		$unidad->tipo_cantidad = $request->tipo_cantidad;
		$unidad->save();
		return responde()->json([
		"message" => "Se ha creado asignar esta unidad."
		"id" => $unidad->id
		],202);
	}


    public function show($id)
    {
		$unidad = Unidad::find($id)
		return responde()->json($unidad);
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
		$unidad->save();
		return responde()->json($unidad);
    }

    public function destroy($id)
    {
        //
		$unidad = Unidad::find($id)
		if($unidad != Null){
			$unidad->delete();
		}
		return responde()->json([
		"message" => "Se ha borrado asignar esta unidad."
		"id" => $id
		],201);
    }
}
