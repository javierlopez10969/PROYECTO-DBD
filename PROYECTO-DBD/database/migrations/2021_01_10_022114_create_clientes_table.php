<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            //Llave primaria
            $table->id('id_clientes');//Id del usuario, llave primaria
            $table->string('nombre_cliente');
            $table->string('telefono_cliente');
            //Llaves foraneas
            
	    //id_feriaF
            $table->unsignedBigInteger('id_feriaF');
            $table->foreign('id_feriaF')->references('id_feriafavoritos')->on('feriafavoritos');
            
	     //id_ferianteF
            $table->unsignedBigInteger('id_ferianteF');
            $table->foreign('id_ferianteF')->references('id_feriantesfavoritos')->on('feriantesfavoritos');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
