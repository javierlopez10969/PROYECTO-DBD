<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionDespachosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('direccion_despachos', function (Blueprint $table) {
            $table->id();//Lave primaria
        	$table->string('direccion');//Direccion
        	$table->integer('numero')->nullable() ; //solo si aplica
			

            $table->timestamps();

            /*
            $table->unsignedBigInteger('id_feriaF');
            $table->foreign('id_feriaF')->references('id')->on('feriaF');
            $table->unsignedBigInteger('id_feriaF');
            $table->foreign('id_feriaF')->references('id')->on('feriaF');
            $table->unsignedBigInteger('id_feriaF');
            $table->foreign('id_feriaF')->references('id')->on('feriaF');

            */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('direccion_despachos');
    }
}
