<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeriaFavorito;

class FeriaFavoritoController extends Controller
{
    //Obtener todos los datos de la tabla Feria Favoritos
    public function index()
    {
        $ferifav = FeriaFavorito::all();
        if($ferifav != NULL){
            return response()->json($ferifav);
        }
        return response()->json([
            "message"=>"No se encontró ningún Feriante",
        ],404);
    }

    //Crear una nueva tupla tupla 
    public function store(Request $request)
    {
        $ferifav = new FeriaFavorito();
            $validatedData = $request->validate([
            'valoracion' => ['required'],
        ]);        

        $ferifav = new FeriaFavorito();
        $ferifav->valoracion = $validatedData->valoracion;
        $ferifav->save();
        return response()->json([
            "message"-> "Se ha añadido una nueva feria a favoritos",
            "id"=>$ferifav->id
        ],202);
    }

    //obtener una tupla específica de una tabla por ID (get)
    public function show($id)
    {
        $ferifav = FeriaFavorito::find($id);
        if($ferifav == NULL){
            return response()->json([
                'message'=>'No se encontro la feria favorita específica'
            ]);
        }
        return response()->($ferifav);
    }


    //Modifcar una tupla específica
    public function update(Request $request, $id)
    {
        $ferifav = FeriaFavorito::find($id);

        if($ferifav->valoracion != NULL){
            $ferifav->valoracion = $request->valoracion;
            $ferifav->save();
            return response()->json($ferifav);
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
        $ferifav = FeriaFavorito::find($id);
        if($ferivar != NULL){
            $ferifav->delete();
            return response()->json([
                "message"-> "Se ha eliminado una feria en favoritos",
                "id"=>$ferifav->id
            ],202);
        }
        else{
            return response()->json([
                "message"-> "No existe la feria favorita escogida para eliminarla",
            ],404);
        }
    }
}
