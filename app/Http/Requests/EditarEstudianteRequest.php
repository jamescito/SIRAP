<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarEstudianteRequest extends FormRequest
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
            "codigoCarnet"=>"required|unique:estudiantes,codigoCarnet,".$this->route('estudiante')->id,
            "nombre"=>"required",
            "apellido"=>"required",
            "carrera_id"=>"required",
            "correo"=>"required"
        ];
    }
}
