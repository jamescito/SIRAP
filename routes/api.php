<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticarController;
use App\Http\Controllers\API\EstudianteController;
use App\Http\Controllers\API\LibroController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('registro',[AutenticarController::class,'registro']);
Route::post('acceso',[AutenticarController::class,'acceso']); 

Route::get('libros',[LibroController::class,'index']);
Route::group(['middleware'=>['auth:sanctum']],function(){
    Route::post('cerrarsesion',[AutenticarController::class,'CerrarSesion']);  
    Route::get('estudiantes',[EstudianteController::class,'index']);
    Route::post('estudiantes',[EstudianteController::class,'store']);
    Route::put('estudiantes/{estudiante}',[EstudianteController::class,'update']);
    Route::get('estudiantes/{estudiante}',[EstudianteController::class,'show']);
    Route::delete('estudiantes/{estudiante}',[EstudianteController::class,'destroy']);




});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
