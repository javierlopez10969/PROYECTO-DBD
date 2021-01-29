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
            $table->id();
            $table->timestamp('fecha_despacho', 0);
            $table->string('tipo_despacho');
            $table->integer('cantidad_elemento_despacho');
            $table->integer('valor_despacho');
            
            //llaves foraneas
            
            $table->unsignedBigInteger('id_feriante')->nullable();
            $table->foreign('id_feriante')->references('id')->on('feriante');
            
            $table->unsignedBigInteger('id_pago')->nullable();
            $table->foreign('id_pago')->references('id')->on('pagos');
            
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
