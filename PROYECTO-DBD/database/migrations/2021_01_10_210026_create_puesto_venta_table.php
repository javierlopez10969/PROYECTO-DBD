<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuestoVentaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('puesto_venta', function (Blueprint $table) {
            $table->id('id_puesto_venta');
            $table->string('categoria');
            
			$table->unsignedBigInteger('id_feriante')->nullable();
			$table->foreign('id_feriante')->references('id_feriante')->on('feriante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('puesto_venta');
    }
}
