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
        Schema::create('producto', function (Blueprint $table) {
            $table->id();
			$table->integer('precio_producto');
			$table->integer('unidad')->nullable();
			$table->boolean('tipo_de_stock')->nullable();
            $table->string('nombre_producto');
            $table->string('categoria');
            
			$table->unsignedBigInteger('id_categoria')->nullable();
            $table->foreign('id_categoria')->references('id')->on('categoria');
            
			$table->unsignedBigInteger('id_unidad')->nullable();
			$table->foreign('id_unidad')->references('id')->on('unidad');
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
