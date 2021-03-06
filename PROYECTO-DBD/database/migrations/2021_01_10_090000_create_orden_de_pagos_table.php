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
            
	        //id_feriante
            $table->unsignedBigInteger('id_feriante')->nulleable();
            $table->foreign('id_feriante')->references('id')->on('feriante');  
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
