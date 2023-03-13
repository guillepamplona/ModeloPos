<?php

namespace App\Http\Requests\Cliente;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'cedula_cliente' => 'required|integer',
            'nombres_cliente' => 'required|string|max:75',
            'apellidos_cliente' => 'required|string|max:75',
            'celular_cliente' => 'required|integer',
            'email_cliente' => 'required|string|max:75',
            'direccion_cliente' => 'required|string|max:75',
            'departamento_cliente' => 'required|string|max:75',
            'ciudad_cliente' => 'required|string|max:75',
            'barrio_cliente' => 'required|string|max:75'
        ];
    }
    public function messages()
    {
        return [
            'cedula_cliente.required'=>'Este campo es requerido.',
            'cedula_cliente.integer'=>'El valor no es correcto.',
            'nombres_cliente.required'=>'Este campo es requerido.',
            'nombres_cliente.string'=>'El valor no es correcto.',
            'nombres_cliente.max'=>'Solo se permite maximo 75 caracteres.',
            'apellidos_cliente.required'=>'Este campo es requerido.',
            'apellidos_cliente.string'=>'El valor no es correcto.',
            'apellidos_cliente.max'=>'Solo se permite maximo 75 caracteres.',
            'celular_cliente.required'=>'Este campo es requerido.',
            'celular_cliente.integer'=>'El valor no es correcto.',
            'email_cliente.required'=>'Este campo es requerido.',
            'email_cliente.string'=>'El valor no es correcto.',
            'email_cliente.max'=>'Solo se permite maximo 75 caracteres.',
            'direccion_cliente.required'=>'Este campo es requerido.',
            'direccion_cliente.string'=>'El valor no es correcto.',
            'direccion_cliente.max'=>'Solo se permite maximo 75 caracteres.',
            'departamento_cliente.required'=>'Este campo es requerido.',
            'departamento_cliente.string'=>'El valor no es correcto.',
            'departamento_cliente.max'=>'Solo se permite maximo 75 caracteres.',
            'ciudad_cliente.required'=>'Este campo es requerido.',
            'ciudad_cliente.string'=>'El valor no es correcto.',
            'ciudad_cliente.max'=>'Solo se permite maximo 75 caracteres.',
            'barrio_cliente.required'=>'Este campo es requerido.',
            'barrio_cliente.string'=>'El valor no es correcto.',
            'barrio_cliente.max'=>'Solo se permite maximo 75 caracteres.',
        ];
    }
}
