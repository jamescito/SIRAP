<?php

namespace App\Http\Controllers;

use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Carreras=Carrera::paginate(3);
        //$Carreras=DB::select('select * from carreras');  
        return view('carrera.index',['carreras'=> $Carreras]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('carrera.create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Carreras= new Carrera();
        $Carreras->codigoCarrera=$request->get('codigoCarrera');
        $Carreras->carrera=$request->get('carrera');
        $Carreras->save();
       return redirect('/Carreras');
        
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
        $Carreras= Carrera::find($id);
        return view('carrera.edit')->with('carrer',$Carreras);
        return redirect('/Carreras');
        
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
        $Carreras= Carrera::find($id);
        $Carreras->codigoCarrera=$request->get('codigoCarrera');
        $Carreras->carrera=$request->get('carrera');
        $Carreras->save();
       return redirect('/Carreras');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $Carreras=Carrera::find($id);
     $Carreras->delete();
     return redirect('/Carreras');
    }
}
