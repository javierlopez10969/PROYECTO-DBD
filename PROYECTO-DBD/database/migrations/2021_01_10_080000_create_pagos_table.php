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
            //Llaves foraneas
            //id_orden de compra
            $table->unsignedBigInteger('id_orden_compra');
            $table->foreign('id_orden_compra')->references('id')->on('orden_de_compras');
            
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
