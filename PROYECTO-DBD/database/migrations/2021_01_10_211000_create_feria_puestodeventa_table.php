<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeriaPuestodeventaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feria_puestodeventa', function (Blueprint $table) {
            $table->id('feria_puestodeventa');

            $table->unsignedBigInteger('id_puesto_venta')->nullable();
            $table->foreign('id_puesto_venta')->references('id_puesto_venta')->on('puesto_venta');
            
			$table->unsignedBigInteger('id_feria')->nullable();
			$table->foreign('id_feria')->references('id_feria')->on('feria');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feria_puestodeventa');
    }
}
