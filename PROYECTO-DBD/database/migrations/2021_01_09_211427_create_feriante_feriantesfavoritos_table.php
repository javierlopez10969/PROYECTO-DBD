<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFerianteFeriantesfavoritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feriante_feriantesfavoritos', function (Blueprint $table) {
            $table->id();
            //llaves foraneas
            
            $table->unsignedBigInteger('id_feriante');
            $table->foreign('id_feriante')->references('id_feriante')->on('feriante');
            
            $table->unsignedBigInteger('id_feriantesfavoritos');
            $table->foreign('id_feriantesfavoritos')->references('id')->on('feriantesfavoritos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feriante_feriantesfavoritos');
    }
}
