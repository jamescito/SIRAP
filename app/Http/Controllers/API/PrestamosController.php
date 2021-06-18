<?php

namespace App\Http\Controllers\API;

use App\Models\Prestamos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\EditarPrestamosRequest;
use App\Http\Requests\GuardarPrestamosRequest;

class PrestamosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $prestamo=Prestamos::query()->paginate(2);
        return response($prestamo,200);
    }
    public function consulta()
    {
        //
        $prestamo=DB::table('prestamos')
        ->join('estudiantes','estudiantes.codigoCarnet', '=' ,'prestamos.estudiante_id')
        ->join('libros','libros.codigolibro', '=' ,'prestamos.libro_id')
        ->join('users','estudiantes.correo', '=' ,'users.email')
        ->select('libros.titulo','estudiantes.nombre','estudiantes.apellido','users.email')
      //  ->where('estudiantes.id',$id)
        ->get();
        return response($prestamo)->json([
            'data'=>$prestamo
        ]);
    }
    public function consultando($id)
    {
        //
        $prestamo=DB::table('prestamos')
        ->join('estudiantes','estudiantes.codigoCarnet', '=' ,'prestamos.estudiante_id')
        ->join('libros','libros.codigolibro', '=' ,'prestamos.libro_id')
        ->join('users','estudiantes.correo', '=' ,'users.email')
        ->select('libros.titulo','estudiantes.nombre','estudiantes.apellido','users.email')
        ->where('users.email',$id)
        ->get();
        return response($prestamo)->json([
            'data'=>$prestamo
        ]);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarPrestamosRequest $request)
    {
        Prestamos::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Prestamo guardado con éxito'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Prestamos $prestamo)
    {
        return response()->json([
            'res'=>true,
            'data'=>$prestamo
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarPrestamosRequest $request,Prestamos $prestamo)
    {
        $prestamo->update($request->all());
        return response()->json([
            'rest'=>true,
            'mensaje'=>'Prestamo actualizado con éxito'
        
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( Prestamos $prestamo)
    {
        $prestamo->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>'Prestamo eliminado con éxito'
        ]);
    }
}
