<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeriantesFavorito;

class FeriantesFavoritoController extends Controller
{
    //Obtener todos los datos de la tabla Feriantes Favoritos
    public function index()
    {
        $ferfav = FeriantesFavorito::all();
        if($ferfav != NULL){
            return response()->json($ferfav);
        }
        return response()->json([
            "message"=>"No se encontró ningún Feriante",
        ],404);
    }

    //Crear una nueva tupla tupla 
    public function store(Request $request)
    {
        $ferfav = new FeriantesFavorito();
            $validatedData = $request->validate([
            'valoracion' => ['required'],
        ]);        

        $ferfav = new FeriantesFavorito();
        $ferfav->valoracion = $validatedData->valoracion;
        $ferfav->save();
        return response()->json([
            "message"-> "Se ha añadido un nuevo feriante a favoritos",
            "id"=>$ferfav->id
        ],202);
    }

    //obtener una tupla específica de una tabla por ID (get)
    public function show($id)
    {
        $ferfav = FeriantesFavorito::find($id);
        if($ferfav == NULL){
            return response()->json([
                'message'=>'No se encontro la tupla específica'
            ]);
        }
        return response()->($ferfav);
    }


    //Modifcar una tupla específica
    public function update(Request $request, $id)
    {
        $ferfav = FeriantesFavorito::find($id);

        if($ferfav->valoracion != NULL){
            $ferfav->valoracion = $request->valoracion;
            $ferfav->save();
            return response()->json($ferfav);
        }
        else{
            return response()->json([
                "message"-> "La tupla escogida no se ha modificado",
            ],404);
        }
    }

    //Borrar una tupla específica
    public function destroy($id)
    {
        $ferfav = FeriantesFavorito::find($id);
        if($fervar != NULL){
            $ferfav->delete();
            return response()->json([
                "message"-> "Se ha eliminado un feriante en favoritos",
                "id"=>$ferfav->id
            ],202);
        }
        else{
            return response()->json([
                "message"-> "No existe el feriante escogido para eliminarlo",
            ],404);
        }
    }
}
