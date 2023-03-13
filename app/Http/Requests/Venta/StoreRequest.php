<?php

namespace App\Http\Requests\Venta;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'fecha_venta' => 'required',
            'id_cliente' => 'integer|required|exists:App\Cliente,id',
            'id_producto' => 'integer|required|exists:App\Producto,id'
        ];
    }
    public function messages()
    {
        return [
            'fecha_venta.required'=>'Este campo es requerido.',
            'id_cliente.integer'=>'El valor tiene que ser entero.',
            'id_cliente.required'=>'Este campo es requerido.',
            'id_cliente.exists'=>'El cliente no existe.',
            'id_producto.integer'=>'El valor tiene que ser entero.',
            'id_producto.required'=>'Este campo es requerido.',
            'id_producto.exists'=>'El producto no existe.'
        ];
    }
}
