<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Estudiantes;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\facade as PDF;
use Livewire\Component;
use App\Http\Livewire;
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
        //$estudiantes=DB::select('select * from estudiantes');
        //$estudiantes=Estudiantes::paginate(3);
        //return view('estudiantes.index', ['estudiantes'=> $estudiantes]);

        $estudiantes=DB::table('estudiantes')
        ->join('carreras','carreras.codigoCarrera', '=' ,'estudiantes.carrera_id')
        ->select('estudiantes.id','estudiantes.codigoCarnet','estudiantes.nombre','estudiantes.apellido','estudiantes.carrera_id','carreras.carrera','estudiantes.correo')
        ->paginate(10);
        return view('estudiantes.index')->with('estudiantes',$estudiantes);
    }

    public function pdf()
    {
        $estudiantes=Estudiantes::paginate(9);
        $pdf = PDF::loadView('estudiantes.pdf', ['estudiantes' => $estudiantes]);
       // return $pdf->download('estudiantes.pdf');
    return $pdf->stream();
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
        $request->validate(['codigoCarnet'    => 'required|unique:estudiantes']);

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
        $carreras = Carrera::All();

        $estudiantes=DB::table('estudiantes')
        ->join('carreras','carreras.codigoCarrera', '=' ,'estudiantes.carrera_id')
        ->select('estudiantes.id','estudiantes.codigoCarnet','estudiantes.nombre','estudiantes.apellido','estudiantes.carrera_id','carreras.carrera','estudiantes.correo')
        ->where('estudiantes.id',$id)->first();
        return view('estudiantes.edit')->with('estudiantes',$estudiantes)->with('carreras',$carreras);

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
        //$estudiantes = Estudiantes::find($id);

        $codigoCarnet = $request->get('codigoCarnet');
        $nombre = $request->get('nombre');
        $apellido = $request->get('apellido');
        $carrera_id = $request->get('carrera_id');
        $correo = $request->get('correo');
        DB::update('update estudiantes Set codigoCarnet=?, nombre=?, apellido=?, carrera_id=?, correo=? where id=?', [$codigoCarnet,$nombre,$apellido,$carrera_id,$correo,$id]);
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
