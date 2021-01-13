<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuentaBancariasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta_bancarias', function (Blueprint $table) {
            $table->id();
            $table->integer('numero_cuenta');
            $table->string('banco');
            $table->string('tipo_cuenta');
            $table->integer('balance');
			
            //id_feriante
            
            $table->unsignedBigInteger('id_feriante');
            $table->foreign('id_feriante')->references('id_feriante')->on('feriante');	
            
            //id_orden_pago
            $table->unsignedBigInteger('id_orden_pago');
            $table->foreign('id_orden_pago')->references('id')->on('orden_de_pagos');
            
            
			//id_cliente
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
        Schema::dropIfExists('cuenta_bancarias');
    }
}
