<?php

namespace App\Http\Controllers\API;

use App\Models\Estudiantes;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditarEstudianteRequest;
use App\Http\Requests\GuardarEstudianteRequest;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Estudiantes::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarEstudianteRequest $request)
    {
        Estudiantes::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Estudiante guardado exitosamente'
        ]);   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Estudiantes $estudiante)
    {
        return response()->json([
            'res'=>true,
            'data'=>$estudiante
        ]); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarEstudianteRequest $request,Estudiantes $estudiante)
    {
        $estudiante->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Estudiante actualizado exitosamente'
        ],200); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estudiantes $estudiante)
    {
        $estudiante->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>'Estudiante Eliminado exitosamente'
        ]);
    }
}
