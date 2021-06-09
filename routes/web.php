<?php

use Illuminate\Support\Facades\Route;

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
Route::resource('Estudiantes', 'App\Http\Controllers\EstudianteController')->middleware('auth');
Route::resource('Libros', 'App\Http\Controllers\LibroController')->middleware('auth');
Route::resource('areas', 'App\Http\Controllers\AreaController')->middleware('auth');
Route::resource('prestamos', 'App\Http\Controllers\PrestamoController')->middleware('auth');
Route::resource('usuario', 'App\Http\Controllers\UserController')->middleware('auth');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

