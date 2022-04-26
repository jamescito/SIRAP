<?php

use App\Http\Livewire\Estudiante;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\EstudianteController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('autores', 'App\Http\Controllers\AutorController')->middleware('auth');
Route::resource('editoriales', 'App\Http\Controllers\EditorialController')->middleware('auth');
Route::resource('Carreras', 'App\Http\Controllers\CarreraController')->middleware('auth');
Route::resource('estudiantes', 'App\Http\Controllers\EstudianteController')->middleware('auth');
//Route::resource('libros', 'App\Http\Controllers\LibroController')->middleware('auth');
Route::resource('libros', LibroController::class);
Route::resource('areas', 'App\Http\Controllers\AreaController')->middleware('auth');
Route::resource('prestamos', 'App\Http\Controllers\PrestamoController')->middleware('auth');

Route::get('download-pdf', [App\Http\Controllers\PrestamoController::class, 'pdf'])->name('prestamos-pdf');
Route::get('descarga-pdf', [App\Http\Controllers\EstudianteController::class, 'pdf'])->name('estudiantes-pdf');

Route::resource('usuario', 'App\Http\Controllers\UserController')->middleware('auth');
Route::resource('otros', 'App\Http\Controllers\OtrosController')->middleware('auth');

//Route::get('/select2',Estudiante::class)->name('select2');
Route::post('myurl',[PrestamoController::class, 'show']);
Route::post('autocompletelibro',[PrestamoController::class, 'autocomplete']);




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

