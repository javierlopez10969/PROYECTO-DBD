<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrdenDeDespacho;

class OrdenDeDespachoController extends Controller
{
    //Obtener todos los datos de la tabla orden de despacho
    public function index()
    {
        $OrdenDes = OrdenDeDespacho::all();
        if($OrdenDes != NULL){
            return response()->json($OrdenDes);
        }
        return response()->json([
            "message"=>"No se encontró ninguna orden de despacho",
        ],404);
    }

    //Crear una nueva tupla tupla 
    public function store(Request $request)
    {
        $OrdenDes = new OrdenDeDespacho();
            $validatedData = $request->validate([   
            'fecha_despacho' => ['required'],
            'tipo_despacho' => ['required'],
            'cantidad_elemento_despacho' => ['required'],
            'valor_despacho' => ['required'],
            'id_feriante' => ['require' , 'numeric'],
            'id_pago' => ['require' , 'numeric'],
        ]);        

        $OrdenDes = new OrdenDeDespacho();
        $OrdenDes->fecha_despacho = $validatedData->fecha_despacho;
        $OrdenDes->tipo_despacho = $validatedData->tipo_despacho;
        $OrdenDes->cantidad_elemento_despacho = $validatedData->cantidad_elemento_despacho;
        $OrdenDes->valor_despacho = $validatedData->valor_despacho;
        $OrdenDes->id_feriante = $validatedData->id_feriante;
        $OrdenDes->id_pago = $validatedData->id_pago;

        $OrdenDes->save();
        return response()->json([
            "message"-> "Se añadio una nueva orden de despacho",
            "id"=>$OrdenDes->id
        ],202);
    }

    //obtener una tupla específica de una tabla por ID (get)
    public function show($id)
    {
        $OrdenDes = OrdenDeDespacho::find($id);
        if($OrdenDes == NULL){
            return response()->json([
                'message'=>'No se encontro la la orden de despacho específica'
            ]);
        }
        return response()->($OrdenDes);
    }


    //Modifcar una tupla específica
    public function update(Request $request, $id)
    {
        $OrdenDes = OrdenDeDespacho::find($id);

        if($OrdenDes->fecha_despacho != NULL){
            $OrdenDes->fecha_despacho = $request->fecha_despacho;   
        }

        if($OrdenDes->tipo_despacho != NULL){
            $OrdenDes->tipo_despacho = $request->tipo_despacho;   
        }

        if($OrdenDes->cantidad_elemento_despacho != NULL){
            $OrdenDes->cantidad_elemento_despacho = $request->cantidad_elemento_despacho;   
        }

        if($OrdenDes->valor_despacho != NULL){
            $OrdenDes->valor_despacho = $request->valor_despacho;   
        }

        if($OrdenDes->id_feriante != NULL){
            $OrdenDes->id_feriante = $request->id_feriante;   
        }

        if($OrdenDes->id_pago != NULL){
            $OrdenDes->id_pago = $request->id_pago;   
        }
        
        $OrdenDes->save();
            return response()->json($OrdenDes);
    }

    //Borrar una tupla específica
    public function destroy($id)
    {
        $OrdenDes = OrdenDeDespacho::find($id);
        if($OrdenDes != NULL){
            $OrdenDes->delete();
            return response()->json([
                "message"-> "Se ha eliminado una orden de despacho",
                "id"=>$OrdenDes->id
            ],202);
        }
        else{
            return response()->json([
                "message"-> "No existe la orden de despacho escogido para eliminarlo",
            ],404);
        }
    }
}
