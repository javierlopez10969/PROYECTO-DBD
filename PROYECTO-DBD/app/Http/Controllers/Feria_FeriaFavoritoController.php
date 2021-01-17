<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feria_FeriaFavorito;

class Feria_FeriaFavoritoController extends Controller
{
    //Obtener todos los datos de la tabla feria_feriafavorito
    public function index()
    {
        $fer_ferfav = Feria_FeriaFavorito::all();
        if($fer_ferfav != NULL){
            return response()->json($fer_ferfav);
        }
        return response()->json([
            "message"=>"No se encontró ningún dato de la tabla",
        ],404);
    }

    //Crear una nueva tupla tupla 
    public function store(Request $request)
    {
        $fer_ferfav = new Feria_FeriaFavorito();
            $validatedData = $request->validate([
            'id_feria' => ['require' , 'numeric'],
            'id_feriafavoritos'=> ['require' , 'numeric'],
        ]);        

        $fer_ferfav = new Feria_FeriaFavorito();
        $fer_ferfav->id_feria = $validatedData->id_feria;
        $fer_ferfav->id_feriafavoritos = $validatedData->id_feriafavoritos;
        $fer_ferfav->save();
        return response()->json([
            "message"-> "Se ha añadido un nueva nueva tupla a la tabla",
            "id"=>$fer_ferfav->id
        ],202);
    }

    //obtener una tupla específica de una tabla por ID (get)
    public function show($id)
    {
        $fer_ferfav = Feria_FeriaFavorito::find($id);
        if($fer_ferfav == NULL){
            return response()->json([
                'message'=>'No se encontro la tupla específica'
            ]);
        }
        return response()->($fer_ferfav);
    }


    //Modifcar una tupla específica
    public function update(Request $request, $id)
    {
        $fer_ferfav = Feria_FeriaFavorito::find($id);

        if($fer_ferfav->id_feria != NULL){
            $fer_ferfav->id_feria = $request->id_feria;
        }
        if($fer_ferfav->id_feriafavoritos != NULL){
            $fer_ferfav->id_feriafavoritos = $request->id_feriafavoritos;
        }

        $fer_ferifav->save();
        return response()->json($fer_ferfav);
    }

    //Borrar una tupla específica
    public function destroy($id)
    {
        $fer_ferfav = Feria_FeriaFavorito::find($id);
        if($fer_ferfav != NULL){
            $fer_ferfav->delete();
            return response()->json([
                "message"-> "Se ha eliminado una tupla",
                "id"=>$fer_ferfav->id
            ],202);
        }
        else{
            return response()->json([
                "message"-> "No existe la tupla para eliminar",
            ],404);
        }
    }
}
