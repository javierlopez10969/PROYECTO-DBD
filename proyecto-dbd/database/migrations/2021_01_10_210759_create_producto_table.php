<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
	{
        Schema::create('puesto_venta', function (Blueprint $table) {
            $table->id('id_producto');
			$table->money_format("precio_producto");
			$table->integer('unidad');
			$table->boolean('tipo_de_stock');
			$table->string('nombre_producto');
			$table->unsignedBigInteger('id_categoria')->nullable();
			$table->foreign('id_categoria')->references('id')->on('categoria');
			$table->unsignedBigInteger('id_unidad')->nullable();
			$table->foreign('id_unidad')->references('id')->on('unidad');
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
        Schema::dropIfExists('producto');
    }
}
