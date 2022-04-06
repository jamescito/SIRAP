<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detallelibro extends Model
{
    use HasFactory;
    protected $table='detallelibros';
    protected $fillable=[
    'tipolibro',
    'autoresCodigo',
    'codigolibro',
    'cantidadpaginas',
    'libroOriginal',
    'aniopublicacion',
    'idioma'
    ];


    public function libro(){
        return $this->belongsTo('App\Models\Libros');
    }
}
