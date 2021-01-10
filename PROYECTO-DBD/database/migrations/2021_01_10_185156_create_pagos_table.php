<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            $table->timestamp('fecha_pago');
            $table->integer('valor_pago');
            $table->string('tipo_pago');
            $table->timestamps();
            //Llaves foraneas
            //id_orden_de_pagos
            $table->unsignedBigInteger('id_orden_de_pago');
            $table->foreign('id_orden_de_pago')->references('id')->on('orden_de_pagos');
            /*
            //id_cuenta bancaria
            $table->unsignedBigInteger('id_pago');
            $table->foreign('id_pago')->references('id')->on('pagos');
            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagos');
    }
}
