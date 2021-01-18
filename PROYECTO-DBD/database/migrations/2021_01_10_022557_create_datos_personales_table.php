<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDatosPersonalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('datos_personales', function (Blueprint $table) {
            $table->id('id_datos_personales');//Id del usuario, llave primaria
            $table->string('correo_electronico'); //Correo electronico
            $table->string('user_name');//Nombre del usuario
            $table->string('password');//Contraseña
            //Llaves foraneas
            //id_feriante
            
            $table->unsignedBigInteger('id_feriante');
            $table->foreign('id_feriante')->references('id_feriante')->on('feriante');
            //id_cliente
            $table->unsignedBigInteger('id_cliente');
            $table->foreign('id_cliente')->references('id_clientes')->on('clientes');	
            
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('datos_personales');
    }
}
