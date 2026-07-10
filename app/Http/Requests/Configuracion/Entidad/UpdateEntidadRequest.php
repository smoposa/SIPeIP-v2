<?php

namespace App\Http\Requests\Configuracion\Entidad;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEntidadRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $entidad = $this->route('entidad');

        return [

            'codigo' => [
                'required',
                'string',
                'max:20',
                Rule::unique('entidades', 'codigo')->ignore($entidad),
            ],

            'nombre' => [
                'required',
                'string',
                'max:200',
            ],

            'siglas' => [
                'required',
                'string',
                'max:20',
            ],

            'ruc' => [
                'required',
                'digits:13',
                Rule::unique('entidades', 'ruc')->ignore($entidad),
            ],

            'tipo' => [
                'required',
                'string',
                'max:100',
            ],

        ];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [

            'codigo.required' => 'El código es obligatorio.',
            'codigo.unique'   => 'El código ya se encuentra registrado.',

            'nombre.required' => 'El nombre es obligatorio.',

            'siglas.required' => 'Las siglas son obligatorias.',

            'ruc.required'    => 'El RUC es obligatorio.',
            'ruc.digits'      => 'El RUC debe contener 13 dígitos.',
            'ruc.unique'      => 'El RUC ya se encuentra registrado.',

            'tipo.required'   => 'El tipo de entidad es obligatorio.',

        ];
    }
}