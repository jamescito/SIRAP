<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            
            $table->id();
            $table->string('codigoCarnet',50)->unique();
            $table->string('nombre',50);
            $table->string('apellido',50);
            $table->string('carrera_id',50);
            $table->string('correo')->unique();;
            $table->foreign('carrera_id')-> references('codigoCarrera')->on('carreras');
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
        Schema::dropIfExists('estudiantes');
    }
}
