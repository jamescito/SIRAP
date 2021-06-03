<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditarLibrosRequest;
use App\Http\Requests\GuardarLibrosRequest;
use App\Models\Libros;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\Cloner\Data;

class LibroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Libros::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuardarLibrosRequest $request)
    {
        Libros::create($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Libro guardado con éxito'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Libros $libro)
    {
        return response()->json([
            'res'=>true,
            'data'=>$libro
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditarLibrosRequest $request,Libros $libro)
    {   
        $libro->update($request->all());
        return response()->json([
            'res'=>true,
            'mensaje'=>'Libro actualizado con éxito'
        ],200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Libros $libro)
    {
        $libro->delete();
        return response()->json([
            'rest'=>true,
            'mensaje'=>'Libro eliminado con éxito'
        ]);
    }
}
