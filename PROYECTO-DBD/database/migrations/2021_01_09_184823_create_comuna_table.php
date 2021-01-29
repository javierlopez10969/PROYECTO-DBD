<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComunaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comuna', function (Blueprint $table) {
            $table->id();
            $table->string('nombre_comuna');
            
            $table->unsignedBigInteger('id_region')->nullable();
            $table->foreign('id_region')->references('id')->on('region');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comuna');
    }
}
