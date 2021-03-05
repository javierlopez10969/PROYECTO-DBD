<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeriaFavorito;

class FeriaFavoritoController extends Controller
{
    //Obtener todos los datos de la tabla Feria Favoritos
    public function index()
    {
        $feria_favorito = FeriaFavorito::all();
        if($feria_favorito != NULL){
            return response()->json($feria_favorito);
        }
        return response()->json([
            "message"=>"No se encontró ningúna feria favorita",
        ],404);
    }

    //Crear una nueva tupla tupla 
    public function store(Request $request)
    {
        $feria_favorito = new FeriaFavorito();
            $validatedData = $request->validate([
            'valoracion' => ['required' , 'numeric'],
        ]);        

        $feria_favorito->valoracion = $request->valoracion;
        $feria_favorito->save();
        return response()->json([
            "message"=> "Se ha añadido una nueva feria a favoritos",
            "id"=>$feria_favorito->id
        ],202);
    }

    //obtener una tupla específica de una tabla por ID (get)
    public function show($id)
    {
        if(is_numeric($id)){
            $feria_favorito = FeriaFavorito::find($id);
            if($feria_favorito == NULL){
                return response()->json([
                    'message'=>'No se encontro la feria favorita específica'
                ]);
            }
            return response()->json($feria_favorito);
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
            $feria_favorito = FeriaFavorito::find($id);
            if($feria_favorito == NULL){
                return response()->json([
                    'message'=>'No se encontro la feria favorita'
                ]);
            }
            else{
                if($request->valoracion != NULL){
                    $feria_favorito->valoracion = $request->valoracion;
                }
                $feria_favorito->save();
                return response()->json($feria_favorito);
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
            $feria_favorito = FeriaFavorito::find($id);
            if($feria_favorito != NULL){
                $feria_favorito->delete();
            }
            else{
                return response()->json([
                    "message" => "id Feria favorito inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Se ha eliminado una feria en favoritos",
                "id"=>$feria_favorito->id
            ],201); 
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
}
