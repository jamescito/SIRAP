<?php

namespace App\Http\Controllers\api;

use App\Models\Editoriales;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Editorialcontroller extends Controller
{
    public function index()
    {
        $editorial=Editoriales::all();
       return response($editorial);
        
        
    }
}
