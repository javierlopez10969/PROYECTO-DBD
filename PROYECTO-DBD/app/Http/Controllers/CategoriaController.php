<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
        $categoria = Categoria::all();
		return responde()->json($categoria);
    }


    public function store(Request $request)
    {
        //
		$validateData = $request->validate([
			'nombre' => ['required','unique:posts','max:255'],
		]);
		$categoria = new Categoria();
		$categoria->nombre = $request->nombre;
		$categoria->save();
		return responde()->json([
		"message" => "Se ha creado un nombre."
		"id" => $categoria->id
		],202);


    public function show($id)
    {
		$categoria = Categoria::find($id)
		return responde()->json($categoria);
    }

    public function update(Request $request, $id)
    {
        //
		$categoria = Categoria::find($id)
		if($request->nombre != NULL){
			$categoria->nombre = $request->nombre;
		}
		$categoria->save();
		return responde()->json($categoria);
    }

    public function destroy($id)
    {
        //
		$categoria = Categoria::find($id)
		if($categoria != Null){
			$categoria->delete();
		}
		return responde()->json([
		"message" => "Se ha borrado un nombre."
		"id" => $id
		],201);
    }
}
