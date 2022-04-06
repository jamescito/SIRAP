<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libros extends Model
{
    use HasFactory;
    protected $table='libros';
    protected $fillable=[
        'codigolibro',
        'titulo',
        'area_id',
        'editoriales_id'
    ];

    public function detallelibros(){
        return $this->hasMany('App\Models\Detallelibro');
    }

    public function prestamos(){
        return $this->hasMany('App\Models\Prestamos');
    }
}
