<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenDeComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_de_compras', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_pago');
            $table->integer('cantidad_elementos_orden');
            $table->boolean('estado_de_pago');
            //Llaves foraneas
            
            //id_orden_de_pagos
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id')->on('clientes');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_de_compras');
    }
}
