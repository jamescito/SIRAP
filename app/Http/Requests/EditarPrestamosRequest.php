<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditarPrestamosRequest extends FormRequest
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
            "codigoPrestamo"=>"required|unique:prestamos,codigoPrestamo,".$this->route('prestamo')->id,
            "estudiante_id"=>"required",
            "libro_id"=>"required",
            "fechaprestamo"=>"required",
            "fechadevolucion"=>"required",
            "fechaestadoprestamo"=>"required"
        ];
    }
}
