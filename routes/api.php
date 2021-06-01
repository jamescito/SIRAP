<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AutenticarController;
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

Route::get('estudiantes',[EstudianteController::class,'index']);
Route::post('estudiantes',[EstudianteController::class,'store']);
Route::put('estudiantes/{estudiante}',[EstudianteController::class,'update']);
Route::get('estudiantes/{estudiante}',[EstudianteController::class,'show']);
Route::delete('estudiantes/{estudiante}',[EstudianteController::class,'destroy']);
Route::post('cerrarsesion',[AutenticarController::class,'CerrarSesion']);

// Route::group(['middleware'=>['auth:sanctum']],function(){


// });



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
