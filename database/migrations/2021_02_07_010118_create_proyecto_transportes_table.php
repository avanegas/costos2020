<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectoTransportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto_transportes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proyecto_id')->unsigned();
            $table->bigInteger('transporte_id')->unsigned();
            $table->string('name')->unique();
            $table->string('unidad');
            $table->double('cantidad', 10, 4);
            $table->string('tipo');
            $table->string('tarifa');            

            //relation
            $table->foreign('proyecto_id')->references('id')->on('proyectos')
                ->onDelete('cascade')
                ->onUpdate('cascade');

            $table->foreign('transporte_id')->references('id')->on('transportes')
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
        Schema::dropIfExists('proyecto_transportes');
    }
}
