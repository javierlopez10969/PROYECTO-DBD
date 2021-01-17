<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PuestoDeVenta;

class PuestoDeVentaController extends Controller
{
    public function index()
    {
        $puestoVenta = PuestoDeVenta::all();
		return responde()->json($puestoVenta);
    }


    public function store(Request $request)
    {
        //
		$validateData = $request->validate([
			'categoria' => ['required','unique:posts','max:255'],
		]);
		$puestoVenta = new PuestoDeVenta();
		$puestoVenta->categoria = $request->categoria;
		$puestoVenta->save();
		return responde()->json([
		"message" => "Se ha creado una categoria."
		"id" => $puestoVenta->id
		],202);
	}


    public function show($id)
    {
		$puestoVenta = PuestoDeVenta::find($id)
		return responde()->json($puestoVenta);
    }

    public function update(Request $request, $id)
    {
        //
		$puestoVenta = PuestoDeVenta::find($id)
		if($request->categoria != NULL){
			$puestoVenta->categoria = $request->categoria;
		}
		$puestoVenta->save();
		return responde()->json($puestoVenta);
    }

    public function destroy($id)
    {
        //
		$puestoVenta = PuestoDeVenta::find($id)
		if($puestoVenta != Null){
			$puestoVenta->delete();
		}
		return responde()->json([
		"message" => "Se ha borrado una categoria."
		"id" => $id
		],201);
    }
}
