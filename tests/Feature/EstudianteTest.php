<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EstudianteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_update()
    {
        $response = $this->put('/api/estudiantes/2', ['codigoCarnet' => '19-348-666987655','nombre' => 'Mompirri','apellido' => 'Calderon','carrera_id' => '1','correo' => 'henry1@gmail.com']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'mensaje'=>'Estudiante actualizado exitosamente',
            ]);
    }
}
