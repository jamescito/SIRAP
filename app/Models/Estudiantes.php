<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiantes extends Model
{
    use HasFactory;
protected $table='estudiantes';
    protected $fillable=[
        'codigoCarnet',
        'nombre',
        'apellido',
        'carrera_id',
        'correo'
    ];


    public function prestamos(){
        return $this->hasMany('App\Models\Prestamos');
    }
    
    public function carreras(){
        return $this->belongsTo(Carrera::class,'carrera_id');
    }
}
