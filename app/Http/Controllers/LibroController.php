<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $libro=DB::select('select * from libros');
        return view('libro.index', ['libro'=> $libro]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('libro.create');
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
            'codigolibro'    => 'required|unique:libros',
            
        ]);

        $libro = new Libros();
        $libro->codigolibro = $request->get('codigolibro');
        $libro->titulo = $request->get('titulo');
        $libro->cantidadpaginas = $request->get('cantidadpaginas');
        $libro->libroOriginal = $request->get('libroOriginal');
        $libro->aniopublicacion = $request->get('aniopublicacion');
        $libro->idioma = $request->get('idioma');
        $libro->area_id = $request->get('area_id');
        $libro->editoriales_id = $request->get('editoriales_id');
        $libro->save();
        return redirect('/libros');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
