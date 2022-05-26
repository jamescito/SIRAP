<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Areas;
use App\Models\Libros;
use App\Models\Autores;
use App\Models\Comment;
use App\Models\Detallelibro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;
use Barryvdh\DomPDF\Facade as PDF;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function contador($id)
    {

    }
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
        ->select('libros.id','detallelibros.tipolibro','detallelibros.autoresCodigo','libros.codigolibro','libros.titulo','detallelibros.cantidadpaginas','detallelibros.libroOriginal','detallelibros.aniopublicacion','detallelibros.idioma','areas.area','editoriales.editorial','libros.cantidadlibro','libros.librodisponible')
        ->paginate(10);

        return view('libro.index',compact('autores_id'))->with('libros',$libro)->with('areas',$areas)->with('autor',$autor);

    }

    public function pdf()
    {
        $fecha = date('m-d-Y', time());
        
        $clasificacion = "Todos los libros";
        $cantidad = DB::table('libros')->count();
        $datos = array($fecha,$clasificacion,$cantidad);

        //$prestamos=DB::select('select * from prestamos');
        $libros=DB::table('libros')
        ->join('detallelibros','detallelibros.codigolibro', '=' ,'libros.codigolibro')
        ->join('areas','areas.codigoArea', '=' ,'libros.area_id')
        ->join('editoriales','editoriales.codigoEditorial', '=' ,'libros.editoriales_id')
        ->select('detallelibros.autoresCodigo','libros.titulo','detallelibros.cantidadpaginas','detallelibros.libroOriginal','detallelibros.aniopublicacion','detallelibros.idioma','areas.area','editoriales.editorial','libros.cantidadlibro')
        ->paginate(10);
        $pdf = PDF::loadView('libro.pdf', ['libros' => $libros],['datos'=>$datos]);
        //return $pdf->download('prestamos.pdf');
        return $pdf->setPaper('a4','landscape')->stream();
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
        $fechaHoy = date('Y-m-d', time());

        $request->validate([
            'codigolibro'    => 'required|unique:libros',
        ]);

        $libro = new Libros();
        $libro->codigolibro = $request->get('codigolibro');
        $libro->titulo = $request->get('titulo');
        $libro->area_id = $request->get('area_id');
        $libro->editoriales_id = $request->get('editoriales_id');
        $libro->cantidadlibro = $request->get('cantidadlibro');
        $libro->librodisponible = $request->get('librodisponible');
        $libro->save();
        var_dump($libro);

        $librodetalle= new Detallelibro();
        $librodetalle->tipolibro = $request->get('tipolibro');
        $librodetalle->autoresCodigo = $request->get('autoresCodigo');
        $librodetalle->codigolibro = $request->get('codigolibro');
        $librodetalle->cantidadpaginas = $request->get('cantidadpaginas');
        $librodetalle->libroOriginal = $request->get('libroOriginal');
        $fecha = $librodetalle->aniopublicacion = $request->get('aniopublicacion');
        $librodetalle->idioma = $request->get('idioma');

        if($fecha < $fechaHoy){
            $librodetalle->save();
            return redirect('/libros');
        }
        else
        {
            //AQUÍ PONES EL MENSAJE QUE DIGA QUE NO PUEDE REGISTRAR DEBIDO A AL FECHA BLABLABLA
            return redirect('/libros');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {

        $data = trim($request->valor);
        $result=DB::table('autores')
        ->where('nombre','like','%'.$data.'%')
        ->orwhere('codigo','like','%'.$data.'%')
        ->limit(5)
        ->get();

        return response()->json([
            "estado"=>1,
            "result"=>$result
        ]);
    }

    public function showeditorial(Request $request)
    {

        $data = trim($request->valor);
        $result=DB::table('editoriales')
        ->where('editorial','like','%'.$data.'%')
        ->orwhere('codigoEditorial','like','%'.$data.'%')
        ->limit(5)
        ->get();

        return response()->json([
            "estado"=>1,
            "result"=>$result
        ]);
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
        // $autores_id=trim($request->get('autores_id'));
        // $autor=DB::table('autores')->select('nombre','apellido')->where('apellido','LIKE','%'.$autores_id.'%')->orderBy('apellido','asc')
        //                             ->paginate(10);
        $autor=Autores::all();
        $areas=Areas::all();

        $libros=DB::table('libros')
        ->join('detallelibros','detallelibros.codigolibro', '=' ,'libros.codigolibro')
        ->join('areas','areas.codigoArea', '=' ,'libros.area_id')
        ->join('editoriales','editoriales.codigoEditorial', '=' ,'libros.editoriales_id')
        ->join('autores','autores.codigo', '=' ,'detallelibros.autoresCodigo')
        ->select('libros.id','libros.librodisponible','detallelibros.tipolibro','autores.nombre','autores.apellido','detallelibros.autoresCodigo','libros.codigolibro','libros.titulo','detallelibros.cantidadpaginas','detallelibros.libroOriginal','detallelibros.aniopublicacion','detallelibros.idioma','areas.area','editoriales.editorial','libros.cantidadlibro','libros.area_id','libros.editoriales_id')
        ->where('libros.id', $id)->first();
        return view('libro.edit')->with('libros',$libros)->with('areas',$areas)->with('autor',$autor);
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

        // $codigolibro = $request->get('codigolibro');
        // $titulo = $request->get('titulo');
        // $area_id = $request->get('area_id');
        // $editoriales_id = $request->get('editoriales_id');
        // $cantidadlibro = $request->get('cantidadlibro');
        // $librodisponible = $request->get('librodisponible');
        // DB::update('update libros set  titulo=?, area_id=?, editoriales_id=?,cantidadlibro=?, librodisponible=? where codigolibro=?', [$titulo,$area_id,$editoriales_id,$cantidadlibro,$codigolibro,$librodisponible]);
        $libro = Libros::find($id);
        $libro->codigolibro = $request->get('codigolibro');
        $libro->titulo = $request->get('titulo');
        $libro->area_id = $request->get('area_id');
        $libro->editoriales_id = $request->get('editoriales_id');
        $libro->cantidadlibro = $request->get('cantidadlibro');
        $libro->librodisponible = $request->get('librodisponible');
        $libro->save();

        $tipolibro = $request->get('tipolibro');
        $autoresCodigo = $request->get('autoresCodigo');
        $codigolibro = $request->get('codigolibro');
        $cantidadpaginas = $request->get('cantidadpaginas');
        $libroOriginal = $request->get('libroOriginal');
        $aniopublicacion = $request->get('aniopublicacion');
        $idioma = $request->get('idioma');
        DB::update('update detallelibros Set tipolibro=?, autoresCodigo=?, codigolibro=?, cantidadpaginas=?, libroOriginal=?, aniopublicacion=?, idioma=? where id=?', [$tipolibro,$autoresCodigo,$codigolibro,$cantidadpaginas,$libroOriginal,$aniopublicacion,$idioma,$id]);
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



    public function search(Request $request)
{
    $autor = Autores::where('nombre', 'LIKE', '%'.$request->search.'%')->get();
    return \response()->json($autor);
}
}
