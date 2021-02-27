<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeriantesFavorito;

class FeriantesFavoritoController extends Controller
{
    //Obtener todos los datos de la tabla Feriantes Favoritos
    public function index()
    {
        $feriante_favorito = FeriantesFavorito::all();
        if($feriante_favorito != NULL){
            return response()->json($feriante_favorito);
        }
        return response()->json([
            "message"=>"No se encontró ningún Feriante favorito",
        ],404);
    }

    //Crear una nueva tupla tupla
    //Correxion 
    public function store(Request $request)
    {
        $feriante_favorito = new FeriantesFavorito();
        $validatedData = $request->validate([
            'valoracion' => ['required'],
        ]);        

        $feriante_favorito->valoracion = $request->valoracion;
        $feriante_favorito->save();
        return response()->json([
            "message"=> "Se ha añadido un nuevo feriante_favorito a favoritos",
            "id"=>$feriante_favorito->id
        ],202);
    }

    //obtener una tupla específica de una tabla por ID (get)
    public function show($id)
    {
        if(is_numeric($id)){
            $feriante_favorito = FeriantesFavorito::find($id);
            if($feriante_favorito == NULL){
                return response()->json([
                    'message'=>'No se encontro el feriante_favorito favorito'
                ]);
            }
            return response()->json($feriante_favorito);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }


    //Modifcar una tupla específica
    public function update(Request $request, $id)
    {
        if(is_numeric($id)){
            $feriante_favorito = FeriantesFavorito::find($id);
            if($feriante_favorito == NULL){
                return response()->json([
                    'message'=>'No se encontro el feriante favorito'
                ]);
            }
            else{
                if($request->valoracion != NULL){
                    $feriante_favorito->valoracion = $request->valoracion;
                }
                $feriante_favorito->save();
                return response()->json($feriante_favorito);
            }  
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }

    //Borrar una tupla específica
    public function destroy($id)
    {
        if(is_numeric($id)){
            $feriante_favorito = FeriantesFavorito::find($id);
            if($feriante_favorito != NULL){
                $feriante_favorito->delete();
            }
            else{
                return response()->json([
                    "message" => "id Feriante favorito inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Feriante favorito eliminado",
                "id"=>$feriante_favorito->id
            ],201);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
}
