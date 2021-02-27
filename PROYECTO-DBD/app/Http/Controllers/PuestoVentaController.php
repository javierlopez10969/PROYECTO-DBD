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

    //Correxion
    public function store(Request $request)
    {
        //
		$puestoVenta = new PuestoDeVenta();
		$validateData = $request->validate([
			'categoria' => ['required','unique:posts','max:255'],
			'id_feriante' => ['require' , 'numeric']
		]);
        /*
		$feriante = Feriante::find($request->id_feriante);
        if($feriante == NULL){
            return response()->json([
                'message'=>'No existe usuario con esa id'
            ]);
        }
        */
		$puestoVenta->categoria = $request->categoria;
		$puesto->delete = $request->delete;
		$puestoVenta->save();
		return responde()->json([
            "message" => "Se ha creado una categoria.",
            "id" => $puestoVenta->id
		],202);
	}


    public function show($id)
    {
		if(is_numeric($id)){
            $puestoVenta = PuestoDeVenta::find($id);
            if($puestoVenta == NULL or $puestoVenta->delete == true){
                return response()->json([
                    'message'=>'No se encontro un puesto de venta'
                ]);
            }
            return response()->json($puestoVenta);
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
            $puestoVenta = PuestoDeVenta::find($id);
            if($puestoVenta == NULL){
                return response()->json([
                    'message'=>'No se encontro el puesto de venta'
                ]);
            }
            else{
                if($request->categoria != NULL){
                    $puestoVenta->categoria = $request->categoria;
                }
                $puestoVenta->save();
                return response()->json($puestoVenta);
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
            $puestoVenta = PuestoDeVenta::find($id);
            if($puestoVenta != Null){
                $puestoVenta->delete();
            }
            else{
                return response()->json([
                    "message" => "id puesto de venta inexistente"
                ],404);
            }

            return response()->json([
                "message" => "Se ha borrado un puesto de venta.",
                "id" => $id
            ],201);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
}
