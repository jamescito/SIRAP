<?php

namespace App\Http\Controllers\API;

use App\Models\Carrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class carreraController extends Controller
{
    public function index()
    {
        $carrera=Carrera::all();
       return response($carrera);
        
        
    }


    public function show(Carrera $carrera)
    {
        return response()->json([
            'res'=>true,
            'data'=>$carrera
        ]); 
    }
}
