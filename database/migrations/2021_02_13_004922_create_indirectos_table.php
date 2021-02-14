<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndirectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indirectos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('proyecto_id')->unsigned();
            $table->string('arriendo');
            $table->string('seguros');
            $table->string('financiamiento');
            $table->string('total_indirectos');
            $table->string('utilidades');
            $table->string('otros');
            $table->timestamps();

            //relation
            $table->foreign('proyecto_id')->references('id')->on('proyectos')
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
        Schema::dropIfExists('indirectos');
    }
}
