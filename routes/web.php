<?php

use App\Http\Livewire\Estudiante;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\PuebloController;
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
Route::resource('pueblo', 'App\Http\Controllers\PuebloController')->middleware('auth');
//Route::resource('libros', 'App\Http\Controllers\LibroController')->middleware('auth');
Route::resource('libros', LibroController::class);
//Route::get('libros','App\Http\Controllers\LibroController@index');
Route::resource('areas', 'App\Http\Controllers\AreaController')->middleware('auth');
Route::resource('prestamos', 'App\Http\Controllers\PrestamoController')->middleware('auth');

Route::get('download-pdf', [App\Http\Controllers\PrestamoController::class, 'pdf'])->name('prestamos-pdf');
Route::get('download-pdf1', [App\Http\Controllers\PrestamoController::class, 'pdf_Estudiantes'])->name('prestamos-Estudiantes-pdf');
Route::get('download-pdf2', [App\Http\Controllers\PrestamoController::class, 'pdf_Publico'])->name('prestamos-Publico-pdf');
Route::get('descarga-pdf', [App\Http\Controllers\EstudianteController::class, 'pdf'])->name('estudiantes-pdf');

Route::get('descarga-pdf1', [App\Http\Controllers\LibroController::class, 'pdf'])->name('libros-pdf');

Route::resource('usuario', 'App\Http\Controllers\UserController')->middleware('auth');
Route::resource('otros', 'App\Http\Controllers\OtrosController')->middleware('auth');

//Route::get('/select2',Estudiante::class)->name('select2');
Route::post('myurl',[PrestamoController::class, 'show']);
Route::post('myurls',[LibroController::class, 'show']);
Route::post('myurlseditorial',[LibroController::class, 'showeditorial']);

Route::post('autocompletelibro',[PrestamoController::class, 'autocomplete']);
//Route::get('autocompletelibro',[PrestamoController::class, 'autocompletes'])->name('autocomplete');
//Route::get('myurl',[PrestamoController::class, 'show'])->name('search');


//Route::get('/search', 'LibroController@search')->name('posts.search');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/manual', function () {
    return view('manual');
})->name('manual');

Route::get('/publico', function () {
    return view('publica');
});
