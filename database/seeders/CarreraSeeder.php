<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarreraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('carreras')->insert([
            'codigoCarrera' => 'NON-CD',
            'carrera' => 'No definido.',
        ]);
    }
}
