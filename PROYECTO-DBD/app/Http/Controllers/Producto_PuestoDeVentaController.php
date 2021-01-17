<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto_PuestoDeVenta;
use App\Models\Producto;
use App\Models\PuestoDeVenta;

class Producto_PuestoDeVentaController extends Controller
{
    public function index()
    {
        //
        $producto_puestodeventa = Producto_PuestoDeVenta::all()->where('delete',false);
        if($producto_puestodeventa != NULL){
            return response()->json($producto_puestodeventa);
        }
        return response()->json([
            "message"=>"No se encontró puesto_producto",
        ],404);;
    }

	
	public function store(Request $request)
    {
        //
        $producto_puestodeventa = new Puesto_producto();
        $validatedData = $request->validate([
            'delete' => ['require' , 'boolean'],
            'id_productos' => ['require' , 'numeric'],
            'id_puesto_venta' => ['require' , 'numeric']
        ]);
        $producto = Producto::find($request->id_productos);
        if($producto == NULL){
            return response()->json([
                'message'=>'No existe producto con esa id'
        }

        $puestodeventa = PuestoDeVenta::find($request->id_puesto_venta);
        if($puestodeventa == NULL){
            return response()->json([
                'message'=>'No existe puesto con esa id'
        }
        $producto_puestodeventa->delete = $request->delete;
        $producto_puestodeventa->save();
        return response()->json([
            "message"=>"Se ha creado un nuevo puesto_producto",
            "id" => $producto_puestodeventa->id
        ],202);
    }
	
    public function show($id)
    {
        //
        $producto_puestodeventa = Producto_PuestoDeVenta::find($id);
        if($producto_puestodeventa == NULL or $producto_puestodeventa->delete == true){
            return response()->json([
                'message'=>'No se encontro una puesto_producto'
            ]);
        }
        return response()->json($producto_puestodeventa);
    }
	
	public function update(Request $request, $id)
    {
        //
        $producto_puestodeventa = Producto_PuestoDeVenta::find($id);
        if($request->delete != NULL){
            $producto_puestodeventa->delete = $request->delete;
        }
        $producto_puestodeventa->save();
        return response()->jason($producto_puestodeventa);

    }
	
	public function destroy($id)
    {
        //
        $producto_puestodeventa = Producto_PuestoDeVenta::find($id);
        if($producto_puestodeventa != NULL){
           $producto_puestodeventa->delete = true; 
           $producto_puestodeventa->save();
        }
        else{
            "message" => "id puesto_producto inexistente"
        }
        return response()->json($producto_puestodeventa);
    }

}
