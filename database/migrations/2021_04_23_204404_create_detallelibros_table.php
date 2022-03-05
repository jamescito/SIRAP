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
            $table->string('autoresCodigo',50); 
            $table->string('codigolibro',50);
            $table->string('cantidadpaginas',50);
            $table->string('libroOriginal',50);
            $table->date('aniopublicacion');
            $table->string('idioma',50);
            $table->foreign('autoresCodigo')->references('codigo')->on('autores');
            $table->foreign('codigolibro')-> references('codigolibro')->on('libros');
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
