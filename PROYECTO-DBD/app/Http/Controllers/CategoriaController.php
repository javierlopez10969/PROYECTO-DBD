<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
		$categoria = Categoria::all()->where('delete',false);
        if($categoria != NULL){
            return response()->json($categoria);
        }
        return response()->json([
            "message"=>"No se encontró la categoria",
        ],404);
    }


    public function store(Request $request)
    {
        //
		$categoria = new Categoria();
		$validateData = $request->validate([
			'nombre' => ['required','unique:posts','max:255'],
		]);
		
		$categoria->nombre = $request->nombre;
		$puesto->delete = $request->delete;
		$categoria->save();
		return responde()->json([
		"message" => "Se ha creado un nombre."
		"id" => $categoria->id
		],202);


    public function show($id)
    {
		$categoria = Categoria::find($id);
        if($categoria == NULL or $categoria->delete == true){
            return response()->json([
                'message'=>'No se encontro una puesto'
            ]);
        }
        return response()->json($categoria);
    }

    public function update(Request $request, $id)
    {
        //
		$categoria = Categoria::find($id)
		if($request->nombre != NULL){
			$categoria->nombre = $request->nombre;
		}
		if($request->delete != NULL){
            $puesto->delete = $request->delete;
        }
		$categoria->save();
		return responde()->json($categoria);
    }

    public function destroy($id)
    {
        //
		$categoria = Categoria::find($id)
		if($categoria != NULL){
			$categoria->delete();
			$categoria->save();
		}
		else{
            "message" => "id Puesto inexistente"
        }
		return responde()->json([
		"message" => "Se ha borrado un nombre."
		"id" => $id
		],201);
    }
}
