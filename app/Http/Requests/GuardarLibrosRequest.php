<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuardarLibrosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
          "codigolibro"=>"required|unique:libros,codigolibro",
          " titulo"=>" required",  
          "cantidadpaginas"=>"required",
          "libroOriginal"=>"required",
          "aniopublicacion"=>"required",
          "idioma"=>"required",
          "area_id"=>"required",
          "editoriales_id"=>"required"
        ];
    }
}
