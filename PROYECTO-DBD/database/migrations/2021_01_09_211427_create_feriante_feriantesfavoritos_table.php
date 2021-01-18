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
            $table->id('id_feriante_feriantesfavoritos');
            //llaves foraneas
            
            $table->unsignedBigInteger('id_feriante')->nulleable;
            $table->foreign('id_feriante')->references('id_feriante')->on('feriante');
            
            $table->unsignedBigInteger('id_feriantesfavoritos')->nulleable;
            $table->foreign('id_feriantesfavoritos')->references('id_feriantesfavoritos')->on('feriantesfavoritos');
            
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
