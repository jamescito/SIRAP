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
            $table->string('id',50);
            $table->string('titulo',50);
            $table->string('cantidadpaginas',50);
            $table->string('libroOriginal',50);
            $table->date('aniopublicacion');
            $table->string('area_id',50);
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreignId('editorials_id')->nullable()->constrained('editorials');
            $table->foreignId('usurs_id')->nullable()->constrained('users');
            $table->primary('id');
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
