<?php

namespace App\Http\Controllers;

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
        ->select('prestamos.id','libros.titulo','estudiantes.nombre','estudiantes.apellido','prestamos.fechaprestamo','prestamos.fechadevolucion','prestamos.fechaestadoprestamo')
        ->paginate(2);
        //->get();

        return view('prestamos.index')->with('prestamos',$prestamos)->with('estudLis',$estudLis);
        
    }

    

    public function pdf()
    {
        $prestamos=DB::select('select * from prestamos');
        view()->share('prestamos.pdf', $prestamos);
        $pdf = PDF::loadView('prestamos.pdf', ['prestamos' => $prestamos]);
        return $pdf->download('prestamos.pdf');
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
    public function store(Request $request)
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
        $prestamos->save();
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
        $prestamos = Prestamos::find($id);
        return view('prestamos.edit')->with('prestamos', $prestamos);
        return redirect('/prestamos');
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
