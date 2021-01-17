<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feria_PuestoDeVenta;

class Feria_PuestoDeVentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feria_PuestoDeVenta = Feria_PuestoDeVenta::all();
        return response()->json($feria_PuestoDeVenta);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $feria_PuestoDeVenta = new Feria_PuestoDeVenta();
        $feria_PuestoDeVenta->save();
        retrun response()->json([
            "message"-> "Nueva feria_PuestoDeVenta agregada",
            "id"=>$feria_PuestoDeVenta->id
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
        $feria_PuestoDeVenta = Feria_PuestoDeVenta::find($id);
        return response()->($feria_PuestoDeVenta);
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
        $feria_PuestoDeVenta = Feria_PuestoDeVenta::find($id);
        $feria_PuestoDeVenta->save();
        return response()->json($feria_PuestoDeVenta);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feria_PuestoDeVenta->delete();
        return response()->json([
            "message"-> "Feria_PuestoDeVenta elimindada",
            "id"=>$feria_PuestoDeVenta->id
            ],201);
    }
}
