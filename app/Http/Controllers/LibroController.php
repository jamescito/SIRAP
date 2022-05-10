<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Areas;
use App\Models\Autores;
use App\Models\Libros;
use App\Models\Comment;
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
    public function index(Request $request)
    {
        //
       // $libro=DB::select('select * from libros');
        //return view('libro.index', ['libro'=> $libro]);
        
        $autores_id=trim($request->get('autores_id'));
        $autor=DB::table('autores')->select('nombre','apellido')->where('apellido','LIKE','%'.$autores_id.'%')->orderBy('apellido','asc')
                                    ->paginate(10);


        $areas=Areas::all();

        $libro=DB::table('libros')
        ->join('detallelibros','detallelibros.codigolibro', '=' ,'libros.codigolibro')
        ->join('areas','areas.codigoArea', '=' ,'libros.area_id')
        ->join('editoriales','editoriales.codigoEditorial', '=' ,'libros.editoriales_id')
        ->select('libros.id','detallelibros.tipolibro','detallelibros.autoresCodigo','libros.codigolibro','libros.titulo','detallelibros.cantidadpaginas','detallelibros.libroOriginal','detallelibros.aniopublicacion','detallelibros.idioma','areas.area','editoriales.editorial')
        ->paginate(10);

        return view('libro.index',compact('autores_id'))->with('libros',$libro)->with('areas',$areas)->with('autor',$autor);

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
        $libro->save();
        var_dump($libro);


        $librodetalle= new Detallelibro();
        $librodetalle->tipolibro = $request->get('tipolibro');
        $librodetalle->autoresCodigo = $request->get('autoresCodigo');
        $librodetalle->codigolibro = $request->get('codigolibro');
        $librodetalle->cantidadpaginas = $request->get('cantidadpaginas');
        $librodetalle->libroOriginal = $request->get('libroOriginal');
        $librodetalle->aniopublicacion = $request->get('aniopublicacion');
        $librodetalle->idioma = $request->get('idioma');
        $librodetalle->save();
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
        // $libro = Libros::find($id);
        // $librodetalle = DetalleLibro::where('codigolibro', $id)->get();
        
        // return view('libro.edit')->with('libro', $libro)->with('librodetalle', $librodetalle);
        

        $libro=DB::table('libros')
        ->join('detallelibros','detallelibros.codigolibro', '=' ,'libros.codigolibro')
        ->join('areas','areas.codigoArea', '=' ,'libros.area_id')
        ->join('editoriales','editoriales.codigoEditorial', '=' ,'libros.editoriales_id')
        ->select('libros.id','detallelibros.autoresCodigo','libros.codigolibro','libros.titulo','detallelibros.cantidadpaginas','detallelibros.libroOriginal','detallelibros.aniopublicacion','detallelibros.idioma','libros.area_id','libros.editoriales_id')
        ->where('libros.id', $id)->first();
        return view('libro.edit')->with('libro',$libro);
        redirect('/libros');
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
        
        $codigolibro = $request->get('codigolibro');
        $titulo = $request->get('titulo');
        $area_id = $request->get('area_id');
        $editoriales_id = $request->get('editoriales_id');
        DB::update('update libros set  titulo=?, area_id=?, editoriales_id=? where codigolibro=?', [$titulo,$area_id,$editoriales_id,$codigolibro]);
        
        $autoresCodigo = $request->get('autoresCodigo');
        $codigolibro = $request->get('codigolibro');
        $cantidadpaginas = $request->get('cantidadpaginas');
        $libroOriginal = $request->get('libroOriginal');
        $aniopublicacion = $request->get('aniopublicacion');
        $idioma = $request->get('idioma');
        DB::update('update detallelibros Set autoresCodigo=?, codigolibro=?, cantidadpaginas=?, libroOriginal=?, aniopublicacion=?, idioma=? where id=?', [$autoresCodigo,$codigolibro,$cantidadpaginas,$libroOriginal,$aniopublicacion,$idioma,$id]);
        return redirect('/libros');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $librodetalle=DetalleLibro::find($id);
        $librodetalle->delete();


        $libro=Libros::find($id);
        $libro->delete();
        return redirect('/libros');

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
