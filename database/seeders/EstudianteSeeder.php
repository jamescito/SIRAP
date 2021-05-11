<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estudiantes')-> insert([
          
            [
                'codigoCarnet'=>'18-343-666',
                'nombre'=>'Eliezer',
                'apellido'=>'Hernandez',
                'carrera_id'=>'1'
            ]

        ]);
     
    }
}
