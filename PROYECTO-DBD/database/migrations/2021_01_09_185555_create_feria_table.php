<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feria', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion');
            $table->string('horario_desde');
            $table->string('horario_hasta');
            $table->string('nombre_comuna');
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
        Schema::dropIfExists('feria');
    }
}
