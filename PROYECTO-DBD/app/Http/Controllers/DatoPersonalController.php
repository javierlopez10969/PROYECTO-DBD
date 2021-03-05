<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DatosPersonal;
use App\Models\Cliente;
use App\Models\Feriante;

class DatoPersonalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dato_personal = DatosPersonal::all();
        if($dato_personal != NULL){
            return response()->json($dato_personal);
        }
        return response()->json([
            "message"=>"No se encontró el dato personal",
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
         
        $dato_personal = new DatosPersonal();
        $cliente = new Cliente();//
        $validatedData = $request->validate([
           
			'nombre_cliente' => ['required' , 'min:2' , 'max:50'],
            'telefono_cliente' => ['required' , 'min:2' , 'max:50'],

            'user_name' => ['required' , 'min:2' , 'max:50'],			
            'correo_electronico' => ['required' , 'min:2' , 'max:100'],
            'password' => ['required' , 'min:2' , 'max:50'],
			//'id_feriante' => ['required' , 'numeric'],
            //'id_cliente' => ['required' , 'numeric']
        ]);
        
        
        $cliente->nombre_cliente = $request->nombre_cliente;
        $cliente->telefono_cliente = $request->telefono_cliente;
        $cliente->save();

        $dato_personal->user_name = $request->user_name;
        $dato_personal->correo_electronico = $request->correo_electronico;
        $dato_personal->password = $request->password;
        $dato_personal->id_cliente = $cliente->id;

        $dato_personal->save();
        
        return response()->json([
			"message"=>"Se ha creado un datos personales",
			"id" => $dato_personal->id
        ],202);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(is_numeric($id)){
            $dato_personal = DatosPersonal::find($id);
            if($dato_personal == NULL){
                return response()->json([
                    'message'=>'No se encontro el dato personal'
                ]);
            }
            return response()->json($dato_personal);
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
            $dato_personal = DatosPersonal::find($id);
            if($dato_personal == NULL){
                return response()->json([
                    'message'=>'No se encontro el dato personal'
                ]);
            }
            else{
                if($request->user_name != NULL){
                    $dato_personal->user_name = $request->user_name;
                }
                if($request->correo_electronico != NULL){
                    $dato_personal->correo_electronico = $request->correo_electronico;
                }
                if($request->password != NULL){
                    $dato_personal->password = $request->password;
                }
                $dato_personal->save();
                return response()->json($dato_personal);
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
    public function destroy($id)
    {
        if(is_numeric($id)){
            $dato_personal = DatosPersonal::find($id);
            if($dato_personal != NULL){
                $dato_personal->delete();
            }
            else{
                return response()->json([
                    "message" => "id Dato personal inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "dato personal eliminado",
                "id"=>$dato_personal->id
            ],201);  
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }   
    }

    public function showDatos($id)
    {
        if(is_numeric($id)){
            $dato_personal = DatosPersonal::find($id);
            $cliente = Cliente::find($id);
            if($dato_personal == NULL){
                return response()->json([
                    'message'=>'id invalido'
                ],404);
            }
            return view('perfil_datosActuales')->with('dato_personal',$dato_personal)->with('cliente',$cliente);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
}