<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CuentaBancaria;
use App\Models\Cliente;
use App\Models\Feriante;
use App\Models\OrdenDePago;

class CuentaBancariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cuenta_bancarias = CuentaBancaria::all();
        if($cuenta_bancarias != NULL){
            return response()->json($cuenta_bancarias);
        }
        return response()->json([
            "message"=>"No se encontró la cuenta bancaria",
        ],404);
    }
	
	
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //Corexion
    public function store(Request $request)
    {
                //
        $cuenta_bancarias = new CuentaBancaria();
        $validatedData = $request->validate([
            'numero_cuenta' => ['required' ,'numeric'],
            'banco' => ['required' , 'min:2' , 'max:50'],
            'tipo_cuenta' => ['required' , 'min:2' , 'max:50'],
            'balance' => ['required' , 'min:2' , 'max:50'],
			
			'id_feriante' => ['required' , 'numeric'],
            'id_cliente' => ['required' , 'numeric'],
            'id_orden_pago' => ['required' , 'numeric']
        ]);
		
		
        //verificar las llaves foraneas
        /*
        $cliente = Cliente::find($request->id_cliente);
        if($cliente == NULL){
            return response()->json([
                'message'=>'No existe un cliente con esa id'
            ]);
        }
        $feriante = Feriante::find($request->id_feriante);
        if($feriante == NULL){
            return response()->json([
                'message'=>'No existe un feriante con esa id'
            ]);
        }
        $orden_de_pago = OrdenDePago::find($request->id_orden_pago);
        if($orden_de_pago == NULL){
            return response()->json([
                'message'=>'No existe orden de pago con esa id'
            ]);
        }
		*/
        $cuenta_bancarias->numero_cuenta = $request->numero_cuenta;
        $cuenta_bancarias->banco = $request->banco;
        $cuenta_bancarias->tipo_cuenta = $request->tipo_cuenta;
        $cuenta_bancarias->balance = $request->balance;
        $cuenta_bancarias->save();
        return response()->json([
			"message"=>"Se ha creado una cuenta bancaria",
			"id" => $cuenta_bancarias->id
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
            $cuenta_bancarias = CuentaBancaria::find($id);
            if($cuenta_bancarias == NULL){
                return response()->json([
                    'message'=>'No se encontro la cuenta bancaria'
                ]);
            }
            return response()->json($cuenta_bancarias);
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
            $cuenta_bancarias = CuentaBancaria::find($id);
            if($cuenta_bancarias == NULL){
                return response()->json([
                    'message'=>'No se encontro la cuenta bancaria'
                ]);
            }
            else{
                if($request->numero_cuenta != NULL){
                    $cuenta_bancarias->numero_cuenta = $request->numero_cuenta;
                }
                if($request->banco != NULL){
                    $cuenta_bancarias->banco = $request->banco;
                }
                if($request->tipo_cuenta != NULL){
                    $cuenta_bancarias->tipo_cuenta = $request->tipo_cuenta;
                }
                $cuenta_bancarias->save();
                return response()->json($cuenta_bancarias);
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
            $cuenta_bancarias = CuentaBancaria::find($id);
            if($cuenta_bancarias != NULL){
                $cuenta_bancarias->delete();
            }
            else{
                return response()->json([
                    "message" => "id Cuenta bancaria inexistente"
                ],404);
            }

            return response()->json([
                "message"=> "cuenta bancaria eliminada",
                "id"=>$cuenta_bancarias->id
            ],201); 
        }
        else{
            return response()->json([
                'message'=>'id invalido'
            ],404);
        } 
    }
}
