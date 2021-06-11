<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestamos extends Model
{
    use HasFactory;
    protected $table='prestamos';
    protected $fillable=[
        'codigoPrestamo',
        'estudiante_id',
        'libro_id',
        'fechaprestamo',
        'fechadevolucion',
        'fechaestadoprestamo'

    ];

    public function estudiante(){
        return $this->belongsTo('App\Models\Estudiantes');
    }

    public function libro(){
        return $this->belongsTo('App\Models\Libros');
    }
}
