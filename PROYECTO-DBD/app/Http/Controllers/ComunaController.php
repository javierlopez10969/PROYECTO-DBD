<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comuna;
use App\Models\Region;

class ComunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comuna = Comuna::all();
        if($comuna != NULL){
            return response()->json($comuna);
        }
        return response()->json([
            "message"=>"No se encontró la comuna",
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
        $comuna = new Comuna();

        $validatedData = $request->validate([
            'nombre_comuna' => ['required' ,'string'],
            
            'id_region' => ['required' , 'numeric'],
        ]);     
        
        $region = Region::find($request->id_region);
        if($region == NULL){
            return response()->json([
                'message'=>'No existe un region con esa id'
                ],404);
        }

        $comuna->$request->nombre_comuna;
        $comuna->$request->id_region;
        $comuna->save();
        return response()->json([
            "message"=> "Nueva comuna agregada",
            "id"=>$comuna->id
        ],201);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comuna = Comuna::find($id);
        return response()->json($comuna);
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
        $comuna = Comuna::find($id);
       if($request->nombre_comuna != NULL){
            $comuna->nombre_comuna = $request->nombre_comuna;
        }
        $comuna->save();
        return response()->json($comuna);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comuna = Comuna::find($id);
        if($comuna != NULL){
            $comuna->delete();
        }
        
        return response()->json([
            "message"=> "comuna elimindada",
            "id"=>$comuna->$id
            ],201);    
    }
}
