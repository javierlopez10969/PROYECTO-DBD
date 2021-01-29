<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeriaFeriafavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feria_feriafavoritos', function (Blueprint $table) {
            $table->id();
            
            //llaves foraneas
            $table->unsignedBigInteger('id_feria')->nullable();
            $table->foreign('id_feria')->references('id')->on('feria');
            
            $table->unsignedBigInteger('id_feriafavoritos')->nullable();
            $table->foreign('id_feriafavoritos')->references('id')->on('feriafavoritos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feria_feriafavoritos');
    }
}
