<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdendedespachoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ordendedespacho', function (Blueprint $table) {
            $table->id('id_orden_despacho');
            $table->timestamp('fecha_despacho', 0);
            $table->string('tipo_despacho');
            $table->integer('cantidad_elemento_despacho');
            $table->integer('valor_despacho');
            
            //llaves foraneas
            
            $table->unsignedBigInteger('id_feriante');
            $table->foreign('id_feriante')->references('id_feriante')->on('feriante');
            
            $table->unsignedBigInteger('id_pago');
            $table->foreign('id_pago')->references('id_pagos')->on('pagos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ordendedespacho');
    }
}
