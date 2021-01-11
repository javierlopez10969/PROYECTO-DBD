<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprobantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comprobantes', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_de_comprobante');
            $table->integer('precio');
	    
	    //Llave foranea orden de pago
            $table->unsignedBigInteger('id_orden_de_pagos');
            $table->foreign('id_orden_de_pagos')->references('id')->on('orden_de_pagos'); 
	    

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comprobantes');
    }
}
