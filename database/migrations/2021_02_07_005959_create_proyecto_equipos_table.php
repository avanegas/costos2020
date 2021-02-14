<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoEquiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_equipos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proyecto_id')->unsigned();           
            $table->bigInteger('equipo_id')->unsigned();
            $table->string('name')->unique();
            $table->string('marca')->nullable();
            $table->string('tipo')->nullable();
            $table->double('cantidad', 10, 4);
            $table->double('tarifa', 10, 4);            

            //relation
            $table->foreign('proyecto_id')->references('id')->on('proyectos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

            $table->foreign('equipo_id')->references('id')->on('equipos')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyecto_equipos');
    }
}
