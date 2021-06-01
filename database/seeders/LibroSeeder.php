<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')-> insert([
            [
            'codigolibro'=>'01',
            'titulo'=>'Historia',
            'cantidadpaginas'=>'150',
            'libroOriginal'=>'Original',
            'aniopublicacion'=>'2000',
            'idioma'=>'Español',
            'area_id'=>'01',
            'editoriales_id'=>'01'
            ]

        ]);
    }
}
