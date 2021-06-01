<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PrestamosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prestamos')-> insert([
            [
                'codigoPrestamo'=>'01',
                'estudiante_id'=>'12',
                'libro_id'=>'13',
                'fechaprestamo'=>'2010',
                'fechadevolucion'=>'2020',
                'fechaestadoprestamo'=>'2021',
            ]
        ]);
    }
}
