<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->string('codigolibro',50)->unique();
            $table->string('titulo',50);
            $table->string('area_id',50);
            $table->string('editoriales_id',50);
            $table->foreign('area_id')->references('codigoArea')->on('areas');
            $table->foreign('editoriales_id')->references('codigoEditorial')->on('editoriales');
            
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
        Schema::dropIfExists('libros');
    }
}
