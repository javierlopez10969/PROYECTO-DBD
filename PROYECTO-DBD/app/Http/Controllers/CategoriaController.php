<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function index()
    {
		$categoria = Categoria::all();//->where('delete',false);
        if($categoria != NULL){
            return response()->json($categoria);
        }
        return response()->json([
            "message"=>"No se encontró la categoria"
        ],404);
    }

    //falta edicion
    public function store(Request $request)
    {
        //
		$categoria = new Categoria();
		$validateData = $request->validate([
			'nombre' => ['required' , 'min:2' , 'max:30'],
		]);
		
		$categoria->nombre = $request->nombre;
		#$puesto->delete = false;
		$categoria->save();
		return response()->json([
		    "message" => "Se ha creado un nombre.",
		    "id" => $categoria->id
		],202);
    }
    
    public function show($id)
    {
        if(is_numeric($id)){
            $categoria = Categoria::find($id);
            if($categoria == NULL or $categoria->delete == true){
                return response()->json([
                    'message'=>'No se encontro la categoria'
                ]);
        }
            return response()->json($categoria);
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
            $categoria = Categoria::find($id);
            if($categoria == NULL){
                return response()->json([
                    'message'=>'No se encontro la categoria'
                ]);
            }
            else{
                if($request->nombre != NULL){
                    $categoria->nombre = $request->nombre;
                }
                if($request->delete != NULL){
                    $puesto->delete = $request->delete;
                }
                $categoria->save();
                return response()->json($categoria);
            }  
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }

    //falta edicion
    public function destroy($id)
    {
        //
        if(is_numeric($id)){
            $categoria = Categoria::find($id);
            if($categoria != NULL){
                $categoria->delete();
                #$categoria->save();
            }
            else{
                return response()->json([
                    "message" => "id Puesto inexistente"
                ],404);
            }

            return responde()->json([
                "message" => "Se ha borrado un nombre.",
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
