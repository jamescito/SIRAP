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

Route::resource('autores','App\Http\Controllers\AutorController');
Route::resource('Editoriales','App\Http\Controllers\EditorialController');
Route::resource('Carreras','App\Http\Controllers\CarreraController');
Route::resource('Estudiantes','App\Http\Controllers\EstudianteController');
Route::resource('Libros','App\Http\Controllers\LibroController');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
