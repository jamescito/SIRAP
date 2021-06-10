<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AreaController;
use App\Http\Controllers\API\LibroController;
use App\Http\Controllers\API\Editorialcontroller;
use App\Http\Controllers\AutenticarController;
use App\Http\Controllers\API\carreraController;
use App\Http\Controllers\API\PrestamosController;
use App\Http\Controllers\API\EstudianteController;

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
Route::post('cerrarsesion',[AutenticarController::class,'CerrarSesion']);


Route::get('estudiantes',[EstudianteController::class,'index']);
Route::get('listarestudiante',[EstudianteController::class,'listar']);
Route::post('estudiantes',[EstudianteController::class,'store']);
Route::put('estudiantes/{estudiante}',[EstudianteController::class,'update']);
Route::get('estudiantes/{estudiante}',[EstudianteController::class,'show']);
Route::delete('estudiantes/{estudiante}',[EstudianteController::class,'destroy']);


Route::get('libros',[LibroController::class,'index']);
Route::get('listar',[LibroController::class,'listar']);
Route::post('libros',[LibroController::class,'store']);
Route::put('libros/{libro}',[LibroController::class,'update']);
Route::get('libros/{libro}',[LibroController::class,'show']);

Route::get('prestamos',[PrestamosController::class,'index']);
Route::post('prestamos',[PrestamosController::class,'store']);
Route::put('prestamos/{prestamo}',[PrestamosController::class,'update']);
Route::get('prestamos/{prestamo}',[PrestamosController::class,'show'])->middleware('auth');


Route::get('carreras/{carrera}',[carreraController::class,'show']);
Route::get('carreras',[carreraController::class,'index']);
Route::get('areas',[AreaController::class,'index']);
Route::get('editoriales',[Editorialcontroller::class,'index']);



// Route::group(['middleware'=>['auth:sanctum']],function(){
//     Route::post('cerrarsesion',[AutenticarController::class,'CerrarSesion']);  
//     Route::get('estudiantes',[EstudianteController::class,'index']);
//     Route::post('estudiantes',[EstudianteController::class,'store']);
//     Route::put('estudiantes/{estudiante}',[EstudianteController::class,'update']);
//     Route::get('estudiantes/{estudiante}',[EstudianteController::class,'show']);
//     Route::delete('estudiantes/{estudiante}',[EstudianteController::class,'destroy']);




// });

// Route::group(['middleware'=>['auth:sanctum']],function(){


// });



//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
