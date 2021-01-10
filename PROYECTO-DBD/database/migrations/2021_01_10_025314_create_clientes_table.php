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
            $table->id();//Id del usuario, llave primaria
            $table->string('nombre_cliente');
            $table->string('telefono_cliente');
            $table->timestamps();
            //Llaves foraneas
            /*
	    //id_feriaF
            $table->unsignedBigInteger('id_feriaF');
            $table->foreign('id_feriaF')->references('id')->on('feriaF');
            
	     //id_ferianteF
            $table->unsignedBigInteger('id_ferianteF');
            $table->foreign('id_ferianteF')->references('id')->on('ferianteF');

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
        Schema::dropIfExists('clientes');
    }
}
