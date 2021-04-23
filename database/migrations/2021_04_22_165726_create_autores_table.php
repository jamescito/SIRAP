<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autores', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->string('codigo', 50);
            $table->unsignedInteger('id');
            $table->primary(['codigo', 'id']);
            $table->string('nombre',40);
            $table->string('apellido',40);
            $table->date('fecha_nacimiento');
            $table->string('nacionalidad',50);
            $table->timestamps();
        });
        Schema::table('autores', function (Blueprint $table) {
            $table->integer('id', true, true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('autores');
    }
}
