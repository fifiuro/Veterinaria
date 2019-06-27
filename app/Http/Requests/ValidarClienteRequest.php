<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidarClienteRequest extends FormRequest
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
            'nombre_cli' => 'required',
            'apellidos_cli' => 'required',
            'ci' => 'required',
            'celular' => 'required',
            'email' => 'required',
            'direccion' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'nombre_cli.required' => 'Ingrese el nombre de cliente.',
            'apellidos_cli.required' => 'Ingrese el apellidos del cliente',
            'ci.required' => 'El numero de CI es necesario.',
            'celular.required' => 'Ingrese el numero de celular',
            'email.required' => 'Ingrese el Email de cliente.',
            'direccion.required' => 'Ingrese la direccion del cliente'
        ];
    }
}
