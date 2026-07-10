<?php

namespace App\Http\Requests\Configuracion\Entidad;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateEstadoEntidadRequest extends FormRequest
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
        return [

            'estado' => [
                'required',
                Rule::in(['Activo', 'Inactivo']),
            ],

        ];
    }

    /**
     * Custom validation messages.
     */
    public function messages(): array
    {
        return [

            'estado.required' => 'Debe seleccionar un estado.',

            'estado.in' => 'El estado seleccionado no es válido.',

        ];
    }
}