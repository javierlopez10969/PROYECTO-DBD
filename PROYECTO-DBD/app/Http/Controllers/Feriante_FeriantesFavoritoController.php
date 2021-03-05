<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feriante_FeriantesFavorito;
use App\Models\Feriante;
use App\Models\FeriantesFavorito;

class Feriante_FeriantesFavoritoController extends Controller
{
    //Obtener todos los datos de la tabla feriante_feriantesfavorito
    public function index()
    {
        $feriante_feriantesfavorito = Feriante_FeriantesFavorito::all();
        if($feriante_feriantesfavorito != NULL){
            return response()->json($feriante_feriantesfavorito);
        }
        return response()->json([
            "message"=>"No se encontró ningún dato de la tabla",
        ],404);
    }

    //Crear una nueva tupla
    //Correxion (se genera el id, pero lo muestra nulo)
    public function store(Request $request)
    {
        $feriante_feriantesfavorito = new Feriante_FeriantesFavorito();
        $validatedData = $request->validate([
            'id_feriante' => ['required' , 'numeric'],
            'id_feriantesfavoritos'=> ['required' , 'numeric']
        ]); 

        $feriante_feriantesfavorito->id_feriante = $request->id_feriante;
        $feriante_feriantesfavorito->id_feriantesfavoritos = $request->id_feriantesfavoritos;
        $feriante_feriantesfavorito->save();
        return response()->json([
            "message" => "Se ha añadido un nueva tupla a la tabla",
            "id" => $feriante_feriantesfavorito->id
        ],202);
    }

    //obtener una tupla específica de una tabla por ID (get)
    public function show($id)
    {
        if(is_numeric($id)){
            $feriante_feriantesfavorito = Feriante_FeriantesFavorito::find($id);
            if($feriante_feriantesfavorito == NULL){
                return response()->json([
                    'message'=>'No se encontro la tupla específica'
                ]);
            }
            return response()->json($feriante_feriantesfavorito);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }


    //Modifcar una tupla específica
    //Ojo con el id_feriante = null
    public function update(Request $request, $id)
    {
        if(is_numeric($id)){
            $feriante_feriantesfavorito = Feriante_FeriantesFavorito::find($id);
            if($feriante_feriantesfavorito == NULL){
                return response()->json([
                    'message'=>'No se encontro el feriante_feriantesfavorito'
                ]);
            }
            else{
                if($feriante_feriantesfavorito->id_feriante != NULL){
                    $feriante_feriantesfavorito->id_feriante = $request->id_feriante;
                }
                if($feriante_feriantesfavorito->id_feriantesfavoritos != NULL){
                    $feriante_feriantesfavorito->id_feriantesfavoritos = $request->id_feriantesfavoritos;
                }
                $feriante_feriantesfavorito->save();
                return response()->json($feriante_feriantesfavorito);
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
            $feriante_feriantesfavorito = Feriante_FeriantesFavorito::find($id);
            if($feriante_feriantesfavorito != NULL){
                $feriante_feriantesfavorito->delete();
            }
            else{
                return response()->json([
                    "message" => "id feriante_feriante favorito inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Se ha eliminado una tupla",
                "id"=>$feriante_feriantesfavorito->id
            ],202);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
}
