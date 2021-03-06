<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosOrdenDeComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_orden_de_compras', function (Blueprint $table) {
            $table->id();
            
            //Llave foraneas
            $table->unsignedBigInteger('id_orden_compra')->nullable();
            $table->foreign('id_orden_compra')->references('id')->on('orden_de_compras');
            
            //id_producto
            $table->unsignedBigInteger('id_producto')->nullable();
            $table->foreign('id_producto')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos_orden_de_compras');
    }
}
