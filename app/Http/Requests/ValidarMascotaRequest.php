<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarMascotaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'id_cli' => 'required',
            'nombre_ma' => 'required',
            'edad' => 'required',
            'sexo' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'id_cli.required' => 'Tiene que escoger a un cliente.',
            'nombre_ma.required' => 'Nombre de la mascota necesario.',
            'edad.required' => 'Edad de la masctota necesario',
            'sexo.required' => 'EL sexo de la mascota es necesario'
        ];
    }
}
