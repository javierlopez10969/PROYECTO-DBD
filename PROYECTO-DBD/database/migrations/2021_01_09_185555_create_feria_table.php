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
            $table->id('id_feria');
            $table->string('descripcion');
            $table->timestamp('horario_desde');
            $table->timestamp('horario_hasta');

            $table->unsignedBigInteger('id_comuna');
            $table->foreign('id_comuna')->references('id_comuna')->on('comuna');
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
