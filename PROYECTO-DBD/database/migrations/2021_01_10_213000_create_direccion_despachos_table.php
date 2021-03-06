<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionDespachosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion_despachos', function (Blueprint $table) {
            $table->id();//Lave primaria
        	$table->string('direccion');//Direccion

            //llaves foraneas
            $table->unsignedBigInteger('id_cliente')->nullable();
            $table->foreign('id_cliente')->references('id')->on('clientes');
			
            $table->unsignedBigInteger('id_orden_despacho')->nullable();
            $table->foreign('id_orden_despacho')->references('id')->on('ordendedespacho');
			
            $table->unsignedBigInteger('id_comuna')->nullable();
            $table->foreign('id_comuna')->references('id')->on('comuna');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccion_despachos');
    }
}
