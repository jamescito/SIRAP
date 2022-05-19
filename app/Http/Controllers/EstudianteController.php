<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use App\Models\Estudiantes;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\facade as PDF;
use Livewire\Component;
use App\Http\Livewire;
use Illuminate\Support\Facades\DB;
use Response;

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

        $carrerasLista = Carrera::All();

        $estudiantes=DB::table('estudiantes')
        ->join('carreras','carreras.codigoCarrera', '=' ,'estudiantes.carrera_id')
        ->select('estudiantes.id','estudiantes.codigoCarnet','estudiantes.nombre','estudiantes.apellido','estudiantes.carrera_id','carreras.carrera','estudiantes.correo')
        ->paginate(10);
        return view('estudiantes.index')->with('estudiantes',$estudiantes)->with('carrerasLista',$carrerasLista);
    }

    public function pdf()
    {
        $fecha = date('m-d-Y', time());
        $clasificacion = "Todos los registros";
        $cantidad = DB::table('estudiantes')->count();
        $datos = array($fecha,$clasificacion,$cantidad);

        $estudiantes=DB::table('estudiantes')
        ->join('carreras','carreras.codigoCarrera', '=' ,'estudiantes.carrera_id')
        ->select('estudiantes.id','estudiantes.codigoCarnet','estudiantes.nombre','estudiantes.apellido','estudiantes.carrera_id','carreras.carrera','estudiantes.correo')
        ->paginate(10);
        $pdf= PDF::loadView('estudiantes.pdf',['estudiantes' => $estudiantes],['datos'=>$datos]);
        return $pdf->setPaper('a4','landscape')->stream();

        // $prestamos=DB::select('select * from prestamos');
        // $pdf = PDF::loadView('prestamos.pdf', ['prestamos' => $prestamos]);
        // //return $pdf->download('prestamos.pdf');
        // return $pdf->stream();
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
    public function show(Request $request)
    {
        $data = trim($request->valor);
        $result=DB::table('estudiantes')
        ->where('nombre','like','%'.$data.'%')
//        ->orwhere('barcode','like','%'.$data.'%')
        ->limit(5)
        ->get();

        return response()->json([
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

    public function autocomplete(Request $request)
    {
        $term=$request->get('term');
        $query=Estudiantes::where('nombre','LIKEE','%'.$term.'%')->get();

        $data=[];
        foreach($query as $qu)
        {
            $data=['label'=> $qu->nombre];
        }

        return $data;


    }
}
