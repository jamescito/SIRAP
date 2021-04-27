<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id('id');
            $table->string('codigoPrestamo',50)->unique();
            $table->string('estudiante_id',50);
            $table->string('libro_id',50);
            $table->date('fechaprestamo');
            $table->date('fechadevolucion');
            $table->date('fechaestadoprestamo');
            $table->foreign('libro_id')->references('codigolibro')->on('libros');
            $table->foreign('estudiante_id')-> references('codigoCarnet')->on('estudiantes');
            
        });
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
