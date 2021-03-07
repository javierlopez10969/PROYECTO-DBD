<?php

namespace App\Http\Controllers;

use App\Models\cart;
use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Cliente;

class CartController extends Controller
{
    public function index()
    {
		$cart = Cart::all();//->where('delete',false);
        if($cart != NULL){
            return response()->json($cart);
        }
        return response()->json([
            "message"=>"No se encontró la categoria"
        ],404);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }
    public function storeProducto(Request $request)
    {
        $newCart = new Cart();
        $newCart->id_producto = $request->id_producto;
        $newCart->id_cliente = $request->id_cliente;
        $newCart->save();

        $clientes = Cliente::all();
        $productos = Producto::all();
        $carts = Cart::all()->where('id_cliente', 1);
        return view('carrito')->with('clientes',$clientes)->with('productos',$productos)->with('carts',$carts);
    }

}
