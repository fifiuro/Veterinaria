<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarServicioRequest extends FormRequest
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
            'nombre_se' => 'required',
            'precio' => 'required',
            'obs_se' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre_se.required' => 'Ingrese el nombre que identifica al servicio.',
            'precio.required' => 'Ingrese el precio del servicio',
            'obs_se.required' => 'Las observaciones on importantes.'
        ];
    }
}
