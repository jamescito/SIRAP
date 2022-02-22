<?php

namespace App\Http\Controllers;

use App\Models\Estudiantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $estudiantes=DB::select('select * from estudiantes');
        return view('estudiantes.index', ['estudiantes'=> $estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('estudiantes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'codigoCarnet'    => 'required|unique:estudiantes',
]);

        $estudiantes = new Estudiantes();
        $estudiantes->codigoCarnet = $request->get('codigoCarnet');
        $estudiantes->nombre = $request->get('nombre');
        $estudiantes->apellido = $request->get('apellido');
        $estudiantes->carrera_id = $request->get('carrera_id');
        $estudiantes->correo = $request->get('correo');
        $estudiantes->save();
        return redirect('/estudiantes');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiantes = Estudiantes::find($id);
        return view('estudiantes.edit')->with('estudiantes', $estudiantes);
        return redirect('/estudiantes');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $estudiantes = Estudiantes::find($id);
        $estudiantes->codigoCarnet = $request->get('codigoCarnet');
        $estudiantes->nombre = $request->get('nombre');
        $estudiantes->apellido = $request->get('apellido');
        $estudiantes->carrera_id = $request->get('carrera_id');
        $estudiantes->correo = $request->get('correo');
        $estudiantes->save();
        return redirect('/estudiantes');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiantes = Estudiantes::find($id);
        $estudiantes->delete();
        return redirect('/estudiantes');
    }
}
