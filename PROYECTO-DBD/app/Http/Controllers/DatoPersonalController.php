<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datos_personal;
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
        $dato_personal = Datos_personal::all();
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
                //
        $dato_personal = new Datos_personal();
        $validatedData = $request->validate([
            'user_name' => ['required' , 'min:2' , 'max:50'],			
            'correo_electronico' => ['required' , 'min:2' , 'max:100'],
            'password' => ['required' , 'min:2' , 'max:50']
			
			'id_feriante' => ['required' , 'numeric'],
            'id_cliente' => ['required' , 'numeric']
        ]);
		
		
        //verificar las llaves foraneas
        $cliente = Cliente::find($request->id_cliente);
        if($cliente == NULL){
            return response()->json([
                'message'=>'No existe un cliente con esa id'
        }
        $feriante = Feriante::find($request->id_feriante);
        if($feriante == NULL){
            return response()->json([
                'message'=>'No existe un feriante con esa id'
        }

		
		
        $dato_personal->user_name = $request->user_name;
        $dato_personal->correo_electronico = $request->correo_electronico;
        $dato_personal->password = $request->password;
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
        $dato_personal = Datos_personal::find($id);
        return response()->($dato_personal);
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
        $dato_personal = Datos_personal::find($id);
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dato_personal->delete();
        return response()->json([
            "message"-> "dato personal elimindado",
            "id"=>$dato_personal->id
        ],201);    
    }
}