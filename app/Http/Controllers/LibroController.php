<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\Detallelibro;
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
       // $libro=DB::select('select * from libros');
        //return view('libro.index', ['libro'=> $libro]);

        $libro=DB::table('libros')
        ->join('detallelibros','detallelibros.codigolibro', '=' ,'libros.codigolibro')
        ->join('areas','areas.codigoArea', '=' ,'libros.area_id')
        ->join('editoriales','editoriales.codigoEditorial', '=' ,'libros.editoriales_id')
        ->select('libros.id','libros.codigolibro','libros.titulo','detallelibros.cantidadpaginas','detallelibros.libroOriginal','detallelibros.aniopublicacion','detallelibros.idioma','areas.area','editoriales.editorial')
        ->paginate(3);

        return view('libro.index')->with('libros',$libro);

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
        $libro->area_id = $request->get('area_id');
        $libro->editoriales_id = $request->get('editoriales_id');
        //$libro->save();


        $libro= new Detallelibro();
        $libro->autoresCodigo = $request->get('autoresCodigo');
        $libro->codigolibro = $request->get('codigolibro');
        $libro->cantidadpaginas = $request->get('cantidadpaginas');
        $libro->libroOriginal = $request->get('libroOriginal');
        $libro->aniopublicacion = $request->get('aniopublicacion');
        $libro->idioma = $request->get('idioma');
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }

    // consulta para mostrar los datos correcto a los usuarios
    public function consultandolibro($id)
    {
        //
        $detallelibro=DB::table('detallelibros')
        ->join('libros','libros.codigolibro', '=' ,'detallelibros.codigolibro')
        ->join('libros','libros.titulo', '=' ,'detallelibros.codigolibro')
        ->join('autores','autores.nombre', '=' ,'users.email')
        ->select('libros.titulo','estudiantes.nombre','estudiantes.apellido','users.email')
        ->where('users.email',$id)
        ->get();
        return response()->json([
            'data'=>$detallelibro
        ]);
    }

}
