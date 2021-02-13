<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Region;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $region = Region::all();
        if($region != NULL){
            return response()->json($region);
        }
        return response()->json([
            "message"=>"No se encontró la region",
        ],404);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Correxion
    public function store(Request $request)
    {
        $region = new Region();

        $validatedData = $request->validate([
            'nombre_region' => ['required' ,'string'],
        ]); 

        $region->$request->nombre_region;
        $region->save();
        return response()->json([
            "message"=> "Nueva region agregada",
            "id"=>$region->id
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
        if(is_numeric($id)){
            $region = Region::find($id);
            if($region == NULL){
                return response()->json([
                    'message'=>'No se encontro la region'
                ]);
            }
            return response()->json($region);
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
            $region = Region::find($id);
            if($region == NULL){
                return response()->json([
                    'message'=>'No se encontro la region'
                ]);
            }
            else{
                if($request->nombre_region != NULL){
                    $feria->nombre_region = $request->nombre_region;
                }
        
                $region->save();
                return response()->json($region);
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
            $region = Region::find($id);
            if($region != NULL){
                $region->delete();
            }
            else{
                return response()->json([
                    "message" => "id Region inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "Region eliminada",
                "id"=>$region->id
            ],201);
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        }
    }
}
