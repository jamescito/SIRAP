<?php

namespace App\Http\Controllers;

use App\Models\Editoriales;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EditorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $Editorial=DB::select('select * from Editoriales');
        return view('Editorial.index', ['Editoriales' => $Editorial]);
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Editorial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $codigoEditorial=$request->get('codigoEditorial');
        $editorial=$request->get('editorial');
        $pais=$request->get('pais');
        $correo=$request->get('correo');
      
        DB::Insert('insert into editoriales (codigoEditorial, editorial, pais, correo) values (?, ?, ?, ?)', [$codigoEditorial, $editorial, $pais, $correo]);
        return redirect('/Editoriales');
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
        $Editorial= Editoriales::find($id);
        return view('Editorial.edit')->with('Editorial', $Editorial);
        return redirect('/Editorial');
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
        $Editorial= Editoriales::find($id);
        $Editorial->codigoEditorial=$request->get('codigoEditorial');
        $Editorial->editorial=$request->get('editorial');
        $Editorial->pais=$request->get('pais');
        $Editorial->correo=$request->get('correo');
        $Editorial->save();
        return redirect('/Editoriales');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Editorial=Editoriales::find($id);
        $Editorial->delete();
        return redirect('/Editoriales');
    }
}
