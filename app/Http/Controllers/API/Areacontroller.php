<?php

namespace App\Http\Controllers\api;

use App\Models\Areas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Areacontroller extends Controller
{
    public function index()
    {
        $areas=Areas::all();
       return response($areas);
        
        
    }
}
