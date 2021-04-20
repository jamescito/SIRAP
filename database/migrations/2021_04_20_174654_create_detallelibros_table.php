<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetallelibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallelibros', function (Blueprint $table) {
            $table->id();
            $table->string('autores_id',50); 
            $table->string('libro_id',50);
            $table->foreign('autores_id')->references('codigo')->on('autores');
            $table->foreign('libro_id')-> references('codigolibro')->on('libros');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detallelibros');
    }
}
