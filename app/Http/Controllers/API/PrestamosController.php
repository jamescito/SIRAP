<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditarPrestamosRequest;
use App\Http\Requests\GuardarPrestamosRequest;
use App\Models\Prestamos;
use Illuminate\Http\Request;

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
        return Prestamos::all();
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
    public function show( Prestamos $prestamos)
    {
        return response()->json([
            'res'=>true,
            'data'=>$prestamos
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarPrestamosRequest $request,Prestamos $prestamos)
    {
        $prestamos->update($request->all());
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
    public function destroy( Prestamos $prestamos)
    {
        $prestamos->delete();
        return response()->json([
            'res'=>true,
            'mensaje'=>'Prestamo eliminado con éxito'
        ]);
    }
}
