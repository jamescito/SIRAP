<?php

namespace App\Http\Controllers;


use App\Models\Autores;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $autores= DB::table('autores')->simplePaginate(10);
        //$autores=Autores::paginate(3);
        //$autores= DB::select('select * from autores');
        return view('autores.index', ['autores' => $autores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('autores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'codigo'    => 'required|unique:autores',
            
        ]);

        $codigo=$request->get('codigo');
        $nombre=$request->get('nombre');
        $apellido=$request->get('apellido');
        $fecha=$request->get('fecha_nacimiento');
        $nacionalidad=$request->get('nacionalidad');
        DB::Insert('insert into autores (codigo, nombre, apellido, fecha_nacimiento, nacionalidad) values (?, ?, ?, ?, ?)', [$codigo, $nombre, $apellido, $fecha, $nacionalidad]);
        return redirect('/autores');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // $autores= autores::where($codigo);
        // return view('autores.edit')->with('autores',$autores);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $autor= autores::find($id);
        return view('autores.edit')->with('autor', $autor);
        return redirect('/autores');
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
        //
        $autores= autores::find($id);
        $autores->codigo=$request->get('codigo');
        $autores->nombre=$request->get('nombre');
        $autores->apellido=$request->get('apellido');
        $autores->fecha_nacimiento=$request->get('fecha_nacimiento');
        $autores->nacionalidad=$request->get('nacionalidad');
        $autores->save();
        return redirect('/autores');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $autor=autores::find($id);
        $autor->delete();
        return redirect('/autores');
    }
}
