<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenDeDespacho;

class OrdenDeDespachoController extends Controller
{
    //Obtener todos los datos de la tabla orden de despacho
    public function index()
    {
        $OrdenDespacho = OrdenDeDespacho::all();
        if($OrdenDespacho != NULL){
            return response()->json($OrdenDespacho);
        }
        return response()->json([
            "message"=>"No se encontró ninguna orden de despacho",
        ],404);
    }

    //Crear una nueva tupla tupla 
    //Correxion
    public function store(Request $request)
    {
        $OrdenDespacho = new OrdenDeDespacho();
            $validatedData = $request->validate([   
            'fecha_despacho' => ['required'],
            'tipo_despacho' => ['required'],
            'cantidad_elemento_despacho' => ['required'],
            'valor_despacho' => ['required'],
            'id_feriante' => ['required' , 'numeric'],
            'id_pago' => ['required' , 'numeric'],
        ]);        

        $OrdenDespacho = new OrdenDeDespacho();
        $OrdenDespacho->fecha_despacho = $request->fecha_despacho;
        $OrdenDespacho->tipo_despacho = $request->tipo_despacho;
        $OrdenDespacho->cantidad_elemento_despacho = $request->cantidad_elemento_despacho;
        $OrdenDespacho->valor_despacho = $request->valor_despacho;
        //$OrdenDespacho->id_feriante = $request->id_feriante;
        //$OrdenDespacho->id_pago = $request->id_pago;

        $OrdenDespacho->save();
        return response()->json([
            "message"=> "Se añadio una nueva orden de despacho",
            "id"=>$OrdenDespacho->id
        ],202);
    }

    //obtener una tupla específica de una tabla por ID (get)
    public function show($id)
    {
        if(is_numeric($id)){
            $OrdenDespacho = OrdenDeDespacho::find($id);
            if($OrdenDespacho == NULL){
                return response()->json([
                    'message'=>'No se encontro la orden de despacho específica'
                ]);
            }
            return response()->json($OrdenDespacho);
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
            $OrdenDespacho = OrdenDeDespacho::find($id);
            if($OrdenDespacho == NULL){
                return response()->json([
                    'message'=>'No se encontro la orden de despacho'
                ]);
            }
            else{
                if($request->fecha_despacho != NULL){
                    $OrdenDespacho->fecha_despacho = $request->fecha_despacho;   
                }
        
                if($request->tipo_despacho != NULL){
                    $OrdenDespacho->tipo_despacho = $request->tipo_despacho;   
                }
        
                if($request->cantidad_elemento_despacho != NULL){
                    $OrdenDespacho->cantidad_elemento_despacho = $request->cantidad_elemento_despacho;   
                }
        
                if($request->valor_despacho != NULL){
                    $OrdenDespacho->valor_despacho = $request->valor_despacho;   
                }
        
                if($request->id_feriante != NULL){
                    $OrdenDespacho->id_feriante = $request->id_feriante;   
                }
        
                if($request->id_pago != NULL){
                    $OrdenDespacho->id_pago = $request->id_pago;   
                }
                
                $OrdenDespacho->save();
                return response()->json($OrdenDespacho);
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
            $OrdenDespacho = OrdenDeDespacho::find($id);
            if($OrdenDespacho != NULL){
                $OrdenDespacho->delete();
            }
            else{
                return response()->json([
                    "message" => "id Orde de despacho inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Orden de despacho eliminado",
                "id"=>$OrdenDespacho->id
            ],201);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
}
