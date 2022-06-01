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
        //return view('prestamos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function edit1($id)
    {

        $libro=Libros::find($id);
        return view('prestamos.index')->with('libros',$libro);
    }
    public function store(Request $request)
    {
        $DesdeLetra = "d";
        $HastaLetra = "y";

        $primero = (random_int(20, 500));
        $segundo = (random_int(1000, 8892));
        $letraAleatoria = chr(rand(ord($DesdeLetra), ord($HastaLetra)));

        $fecha = date('Y-m-d', time());

        $prestamos=new Prestamos();
        $prestamos->codigoPrestamo = ($primero."-".$segundo.$letraAleatoria);
        $prestamos->estudiante_id = $request->get('estudiante_id');
        $codigolibro = $prestamos->libro_id = $request->get('libro_id');
        $prestamos->fechaprestamo = $fecha;
        $fecha_devolucion = $prestamos->fechadevolucion = $request->get('fechadevolucion');
        $prestamos->fechaestadoprestamo = $request->get('fechaestadoprestamo');
        $prestamos->disponible = $request->get('disponible');

        //OBTENEMOS EL ID Y HACEMOS UPDATE,

        if($fecha_devolucion >= $fecha){
            $disponibles = DB::table('libros')->where('codigolibro', $codigolibro)->value('librodisponible');
            $nuevo=intval($disponibles) - 1;
            DB::update('update libros set librodisponible=? where codigolibro=?', [$nuevo,$codigolibro]);
            $prestamos->save();
            return redirect('/prestamos');
        }
        else
        {
            //AQUÍ PONES EL MENSAJE QUE DIGA QUE NO PUEDE REGISTRAR DEBIDO A AL FECHA BLABLABLA
            return redirect('/prestamos');
            // O NO SÉ SI PONDRÁN MENSAJE
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
    // public function updat()
    // {
    //     $libro=Libros::find($id);
    //     $libro->librodisponible = $request->get('librodisponible');
    //     $libro->save();
    // }
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
        $codigolibro = $prestamos->libro_id = $request->get('libro_id');
        $prestamos->fechaprestamo = $request->get('fechaprestamo');
        $prestamos->fechadevolucion = $request->get('fechadevolucion');
        $estado_del_prestamo = $prestamos->fechaestadoprestamo = $request->get('fechaestadoprestamo');
        $prestamos->disponible = $request->get('disponible');
        $disponibles = DB::table('libros')->where('codigolibro', $codigolibro)->value('librodisponible');
        if($estado_del_prestamo == "Regresado"){
            $nuevo=intval($disponibles) + 1;
            DB::update('update libros set librodisponible=? where codigolibro=?', [$nuevo,$codigolibro]);
            $prestamos->save();
            return redirect('/prestamos');
        }
        else{
            $prestamos->save();
            return redirect('/prestamos');
        }
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
