<?php

namespace App\Http\Controllers;

use App\Models\Libros;
use App\Models\Prestamos;
use App\Models\Estudiantes;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function autocompletes(Request $request)
    {
        $data = Estudiantes::select("nombre")
                ->where("nombre","LIKE","%{$request->query}%")
                ->get();

        return response()->json($data);
    }

    public function index()
    {
        //
       // $prestamos=DB::select('select * from prestamos');
        // return view('prestamos.index', ['prestamos'=> $prestamos]);

        //$prestamos=Prestamos::paginate(5);

        $estudLis = Estudiantes::All();

        $prestamos=DB::table('prestamos')
        ->join('estudiantes','estudiantes.codigoCarnet', '=' ,'prestamos.estudiante_id')
        ->join('libros','libros.codigolibro', '=' ,'prestamos.libro_id')
        ->select('prestamos.id','libros.titulo','prestamos.estudiante_id','estudiantes.nombre','estudiantes.apellido','prestamos.fechaprestamo','prestamos.fechadevolucion','prestamos.fechaestadoprestamo','prestamos.disponible')
        ->paginate(10);
        //->get();

        return view('prestamos.index')->with('prestamos',$prestamos)->with('estudLis',$estudLis);

    }



    public function pdf()
    {

        $fecha = date('m-d-Y', time());
        $clasificacion = "Todos los préstamos";
        $cantidad = DB::table('prestamos')->count();
        $datos = array($fecha,$clasificacion,$cantidad);
        //$prestamos=DB::select('select * from prestamos');
        $prestamos=DB::table('prestamos')
        ->join('estudiantes','estudiantes.codigoCarnet', '=' ,'prestamos.estudiante_id')
        ->join('libros','libros.codigolibro', '=' ,'prestamos.libro_id')
        ->select('prestamos.id','libros.titulo','estudiantes.nombre','estudiantes.apellido','prestamos.fechaprestamo','prestamos.fechadevolucion','prestamos.fechaestadoprestamo','prestamos.disponible')
        ->paginate(12);
        $pdf = PDF::loadView('prestamos.pdf', ['prestamos' => $prestamos],['datos'=>$datos]);
        //return $pdf->download('prestamos.pdf');
        return $pdf->setPaper('a4','landscape')->stream();
    }

    public function pdf_Estudiantes()
    {
        $est = '18';
        //$prestamos=DB::select('select * from prestamos');
        $fecha = date('m-d-Y', time());
        $clasificacion = "Estudiantes";
        $cantidad = DB::table('prestamos')->where('estudiante_id','like','%'.$est.'%')->count();

        $datos = array($fecha,$clasificacion,$cantidad);

        $prestamos=DB::table('prestamos')
        ->join('estudiantes','estudiantes.codigoCarnet', '=' ,'prestamos.estudiante_id')
        ->join('libros','libros.codigolibro', '=' ,'prestamos.libro_id')
        ->select('prestamos.id','libros.titulo','estudiantes.nombre','estudiantes.apellido','prestamos.fechaprestamo','prestamos.fechadevolucion','prestamos.fechaestadoprestamo','prestamos.disponible')
        ->WHERE('prestamos.estudiante_id','like','%'.$est.'%')
        ->paginate(12);
        $pdf = PDF::loadView('prestamos.pdf', ['prestamos' => $prestamos],['datos'=>$datos]);
        //return $pdf->download('prestamos.pdf');
        return $pdf->setPaper('a4','landscape')->stream();

    }
    public function pdf_Publico()
    {
        //$prestamos=DB::select('select * from prestamos');
        $est = '610';

        //$prestamos=DB::select('select * from prestamos');
        $fecha = date('m-d-Y', time());
        $clasificacion = "Población en general";
        $cantidad = DB::table('prestamos')->where('estudiante_id','like','%'.$est.'%')->count();

        $datos = array($fecha,$clasificacion,$cantidad);

        $prestamos=DB::table('prestamos')
        ->join('estudiantes','estudiantes.codigoCarnet', '=' ,'prestamos.estudiante_id')
        ->join('libros','libros.codigolibro', '=' ,'prestamos.libro_id')
        ->select('prestamos.id','libros.titulo','estudiantes.nombre','estudiantes.apellido','prestamos.fechaprestamo','prestamos.fechadevolucion','prestamos.fechaestadoprestamo','prestamos.disponible')
        ->WHERE('prestamos.estudiante_id','like','%'.$est.'%')
        ->paginate(12);
        $pdf = PDF::loadView('prestamos.pdf', ['prestamos' => $prestamos],['datos'=>$datos]);
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
        return view('prestamos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'codigoPrestamo'    => 'required|unique:prestamos',
        ]);


        $prestamos=new Prestamos();
        $prestamos->codigoPrestamo = $request->get('codigoPrestamo');
        $prestamos->estudiante_id = $request->get('estudiante_id');
        $prestamos->libro_id = $request->get('libro_id');
        $prestamos->fechaprestamo = $request->get('fechaprestamo');
        $prestamos->fechadevolucion = $request->get('fechadevolucion');
        $prestamos->fechaestadoprestamo = $request->get('fechaestadoprestamo');
        $prestamos->disponible = $request->get('disponible');
        $prestamos->save();

        // $libro = Libros::find($id);
        // $libro->librodisponible = $request->get('librodisponible');
        // $libro->save();

      // $codigolibro = $request->get('codigolibro');
        $librodisponible = $request->get('librodisponible');
        DB::update('update libros set librodisponible=? where id=?', [$librodisponible,$id]);
        return redirect('/prestamos');
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
        $result=DB::table('estudiantes')
        ->where('nombre','like','%'.$data.'%')
        ->orwhere('codigoCarnet','like','%'.$data.'%')
        ->limit(5)
        ->get();

        return response()->json([
            "estado"=>1,
            "result"=>$result
        ]);
    }

    public function autocomplete(Request $request)
    {
        $data = trim($request->valor);
        $result=DB::table('libros')
        ->where('titulo','like','%'.$data.'%')
        ->orwhere('codigolibro','like','%'.$data.'%')

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
        // $prestamos = Prestamos::find($id);
        // return view('prestamos.edit')->with('prestamos', $prestamos);
        // return redirect('/prestamos');

        $estudLis = Estudiantes::All();

        $prestamos=DB::table('prestamos')
        ->join('estudiantes','estudiantes.codigoCarnet', '=' ,'prestamos.estudiante_id')
        ->join('libros','libros.codigolibro', '=' ,'prestamos.libro_id')
        ->select('prestamos.id','prestamos.codigoPrestamo','prestamos.estudiante_id','prestamos.libro_id','estudiantes.nombre','libros.titulo','prestamos.fechaprestamo','prestamos.fechadevolucion','prestamos.fechaestadoprestamo','prestamos.disponible')
        ->where('prestamos.id',$id)->first();
        return view('prestamos.edit')->with('prestamos',$prestamos)->with('estudLis',$estudLis);


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
        $prestamos= Prestamos:: find($id);
        $prestamos->codigoPrestamo = $request->get('codigoPrestamo');
        $prestamos->estudiante_id = $request->get('estudiante_id');
        $prestamos->libro_id = $request->get('libro_id');
        $prestamos->fechaprestamo = $request->get('fechaprestamo');
        $prestamos->fechadevolucion = $request->get('fechadevolucion');
        $prestamos->fechaestadoprestamo = $request->get('fechaestadoprestamo');
        $prestamos->disponible = $request->get('disponible');
        $prestamos->save();
        return redirect('/prestamos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prestamos = Prestamos::find($id);
        $prestamos->delete();
        return redirect('/prestamos');
    }
}
