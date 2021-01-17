<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feriante_FeriantesFavorito;

class Feriante_FeriantesFavoritoController extends Controller
{
    //Obtener todos los datos de la tabla feriante_feriantesfavorito
    public function index()
    {
        $fer_ferifav = Feriante_FeriantesFavorito::all();
        if($fer_ferifav != NULL){
            return response()->json($fer_ferifav);
        }
        return response()->json([
            "message"=>"No se encontró ningún dato de la tabla",
        ],404);
    }

    //Crear una nueva tupla tupla 
    public function store(Request $request)
    {
        $fer_ferifav = new Feriante_FeriantesFavorito();
            $validatedData = $request->validate([
            'id_feriante' => ['require' , 'numeric'],
            'id_feriantesfavoritos'=> ['require' , 'numeric'],
        ]);        

        $fer_ferifav = new Feriante_FeriantesFavorito();
        $fer_ferifav->id_feriante = $validatedData->id_feriante;
        $fer_ferifav->id_feriantesfavoritos = $validatedData->id_feriantesfavoritos;
        $fer_ferifav->save();
        return response()->json([
            "message"-> "Se ha añadido un nueva nueva tupla a la tabla",
            "id"=>$fer_ferifav->id
        ],202);
    }

    //obtener una tupla específica de una tabla por ID (get)
    public function show($id)
    {
        $fer_ferifav = Feriante_FeriantesFavorito::find($id);
        if($fer_ferifav == NULL){
            return response()->json([
                'message'=>'No se encontro la tupla específica'
            ]);
        }
        return response()->($fer_ferifav);
    }


    //Modifcar una tupla específica
    public function update(Request $request, $id)
    {
        $fer_ferifav = Feriante_FeriantesFavorito::find($id);

        if($fer_ferifav->id_feriante != NULL){
            $fer_ferifav->id_feriante = $request->id_feriante;
        }
        if($fer_ferifav->id_feriantesfavoritos != NULL){
            $fer_ferifav->id_feriantesfavoritos = $request->id_feriantesfavoritos;
        }
        $fer_ferifav->save();
        return response()->json($fer_ferifav);
    }

    //Borrar una tupla específica
    public function destroy($id)
    {
        $fer_ferifav = Feriante_FeriantesFavorito::find($id);
        if($fer_ferifav != NULL){
            $fer_ferifav->delete();
            return response()->json([
                "message"-> "Se ha eliminado una tupla",
                "id"=>$fer_ferifav->id
            ],202);
        }
        else{
            return response()->json([
                "message"-> "No existe la tupla para eliminar",
            ],404);
        }
    }
}
