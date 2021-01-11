<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdenDePagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orden_de_pagos', function (Blueprint $table) {
            $table->id(); //Primaria
            $table->timestamp('fecha_de_pago');
            $table->string('tipo_pago');
            $table->integer('valor_total_pago');
            //Lista de pagos
            //Llaves foraneas
            //id_pago
            /*
            $table->unsignedBigInteger('id_pago');
            $table->foreign('id_pago')->references('id')->on('pagos');
            */
            
	     //id_feriante
            $table->unsignedBigInteger('id_feriante');
            $table->foreign('id_feriante')->references('id_feriante')->on('feriante');
            

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orden_de_pagos');
    }
}
