<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarLibrosRequest extends FormRequest
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
            "codigolibro"=>"required|unique:libros,codigolibro".$this->route('libros')->id,
            " titulo"=>"required",
            " titulo"=>"required",
            "cantidadpaginas"=>"required",
            "libroOriginal"=>"required",
            "idioma"=>"required",
            "area_id"=>"required",
            "editoriales_id"=>"required"
        ];
    }
}
