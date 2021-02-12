<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\FeriaFavorito;
use App\Models\FeriantesFavorito;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cliente = Cliente::all();
        if($cliente != NULL){
            return response()->json($cliente);
        }
        return response()->json([
            "message"=>"No se encontró el cliente",
        ],404);
    }
	
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
                //
        $cliente = new Cliente();
        $validatedData = $request->validate([
            'nombre_cliente' => ['required' , 'min:2' , 'max:50'],
            'telefono_cliente' => ['required' , 'min:2' , 'max:50'],
      
			'id_feriaF' => ['required' , 'numeric'],
            'id_ferianteF' => ['required' , 'numeric']
        ]);
		
		
        //verificar las llaves foraneas
        $feriaF = FeriaFavorito::find($request->id_feriaF);
        if($feriaF == NULL){
            return response()->json([
                'message'=>'No existe feria favorita con esa id'
            ]);
        }
        $ferianteF = FeriantesFavorito::find($request->id_ferianteF);
        if($ferianteF == NULL){
            return response()->json([
                'message'=>'No existe feriante favorito con esa id'
            ]);
        }

        $cliente->nombre_cliente = $request->nombre_cliente;
        $cliente->telefono_cliente = $request->telefono_cliente;
        $cliente->save();
        return response()->json([
			"message"=>"Se ha creado un cliente",
			"id" => $cliente->id
        ],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Correxion
    public function show($id)
    {
        if(is_numeric($id)){
            $cliente = Cliente::find($id);
            if($cliente == NULL){
                return response()->json([
                    'message'=>'No se encontro el cliente'
                ]);
            }
            return response()->json($cliente);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(is_numeric($id)){
            $cliente = Cliente::find($id);
            if($cliente == NULL){
                return response()->json([
                    'message'=>'No se encontro al cliente'
                ]);
            }
            else{
                if($request->nombre_cliente != NULL){
                    $cliente->nombre_cliente = $request->nombre_cliente;
                }
                if($request->telefono_cliente != NULL){
                    $cliente->telefono_cliente = $request->telefono_cliente;
                }
        
                $cliente->save();
                return response()->json($cliente);
            }  
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //Correxion
    public function destroy($id)
    {
        if(is_numeric($id)){
            $cliente = Cliente::find($id);
            if($cliente != NULL){
                $cliente->delete();
            }
            else{
                return response()->json([
                    "message" => "id Cliente inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "cliente eliminado",
                "id"=>$cliente->id
            ],201); 
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }   
    }
}