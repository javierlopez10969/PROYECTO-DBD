<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagoOrdendepagoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pago_ordendepago', function (Blueprint $table) {
            $table->id('id_orden_pagos');
            
            //llaves foraneas
            //id_pago
            $table->unsignedBigInteger('id_pago');
            $table->foreign('id_pago')->references('id_pagos')->on('pagos');
            
            //id_orden_pago
            $table->unsignedBigInteger('id_orden_pago');
            $table->foreign('id_orden_pago')->references('id_orden_pagos')->on('orden_de_pagos');
            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pago_ordendepago');
    }
}
