<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feria_FeriaFavorito;
use App\Models\Feria;
use App\Models\FeriaFavorito;

class Feria_FeriaFavoritoController extends Controller
{
    //Obtener todos los datos de la tabla feria_feriafavorito
    public function index()
    {
        $feria_feriafavorito = Feria_FeriaFavorito::all();
        if($feria_feriafavorito != NULL){
            return response()->json($feria_feriafavorito);
        }
        return response()->json([
            "message"=>"No se encontró ningún dato de la tabla",
        ],404);
    }

    //Crear una nueva tupla tupla 
    public function store(Request $request)
    {
        $feria_feriafavorito = new Feria_FeriaFavorito();
        $validatedData = $request->validate([
            'id_feria' => ['require' , 'numeric'],
            'id_feriafavoritos'=> ['require' , 'numeric'],
        ]);        
        
        $feria_feriafavorito->save();
        return response()->json([
            "message"=> "Se ha añadido un nueva tupla a la tabla",
            "id"=>$feria_feriafavorito->id
        ],202);
    }

    //obtener una tupla específica de una tabla por ID (get)
    public function show($id)
    {
        if(is_numeric($id)){
            $feria_feriafavorito = Feria_FeriaFavorito::find($id);
            if($feria_feriafavorito == NULL){
                return response()->json([
                    'message'=>'No se encontro la tupla específica'
                ]);
            }
            return response()->json($feria_feriafavorito);
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
            $feria_feriafavorito = Feria_FeriaFavorito::find($id);
            if($feria_feriafavorito == NULL){
                return response()->json([
                    'message'=>'No se encontro la feria_feriafavorito'
                ]);
            }
            else{
                if($request->id_feria != NULL){
                    $feria_feriafavorito->id_feria = $request->id_feria;
                }
                if($request->id_feriafavoritos != NULL){
                    $feria_feriafavorito->id_feriafavoritos = $request->id_feriafavoritos;
                }
        
                $feria_feriafavorito->save();
                return response()->json($feria_feriafavorito);
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
            $feria_feriafavorito = Feria_FeriaFavorito::find($id);
            if($feria_feriafavorito != NULL){
                $feria_feriafavorito->delete();
            }
            else{
                return response()->json([
                    "message" => "id feria_feria favorito inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Se ha eliminado una tupla",
                "id"=>$feria_feriafavorito->id
            ],202); 
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }

    public function showFeriaFavorito($id)
    {
        //$filtro = $id->get('id_feriafavoritos');
       // if($filtro == NULL){
            //$feria_feriafavorito = collect([]);
            //$feria = collect([]);
               // return view('feria_fav')->with('feria_feriafavoritos',$feria_feriafavorito)->with('feria',$feria);

             //   return response()->json([
           //     'message'=>'id invalido'
         //   ],404);
        //}

        $feria_feriafavoritos = Feria_FeriaFavorito::all()->where('id_feriafavoritos', $id);
        $feria = Feria::all();
        return view('feria_fav')->with('feria_feriafavoritos',$feria_feriafavoritos)->with('feria',$feria);
    }
}
