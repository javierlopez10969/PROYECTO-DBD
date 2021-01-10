<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoPuestoVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_puesto_venta', function (Blueprint $table) {
            $table->id('id_producto_puesto_venta');
			$table->unsignedBigInteger('id_puesto_venta')->nullable();
			$table->foreign('id_puesto_venta')->references('id')->on('puesto_venta');
			$table->unsignedBigInteger('id_producto')->nullable();
			$table->foreign('id_producto')->references('id')->on('producto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto_puesto_venta');
    }
}
