<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PuestoDeVenta;
use App\Models\Feriante;

class PuestoVentaController extends Controller
{

    public function index()
    {
		$puestoVenta = PuestoDeVenta::all()->where('delete',false);
        if($puestoVenta != NULL){
            return response()->json($puestoVenta);
        }
        return response()->json([
            "message"=>"No se encontró Puesto De Venta",
        ],404);
    }


    public function store(Request $request)
    {
        //
		$puestoVenta = new PuestoDeVenta();
		$validateData = $request->validate([
			'categoria' => ['required','unique:posts','max:255'],
			'id_feriante' => ['require' , 'numeric']
		]);
		$feriante = Feriante::find($request->id_feriante);
        if($feriante == NULL){
            return response()->json([
                'message'=>'No existe usuario con esa id'
        }
		$puestoVenta->categoria = $request->categoria;
		$puesto->delete = $request->delete;
		$puestoVenta->save();
		return responde()->json([
		"message" => "Se ha creado una categoria."
		"id" => $puestoVenta->id
		],202);
	}


    public function show($id)
    {
		$puestoVenta = PuestoDeVenta::find($id);
        if($puestoVenta == NULL or $puestoVenta->delete == true){
            return response()->json([
                'message'=>'No se encontro una puesto'
            ]);
        }
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
