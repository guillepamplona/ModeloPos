<?php

namespace App\Http\Requests\Producto;

use App\Http\Controllers\Admin\HomeController;
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
            'nombre_producto' => 'required|string|max:75',
            'descripcion_producto' => 'required|string|max:75',
            'valor_producto' => 'required|integer',
            'cantidad_producto' => 'required|integer'
        ];
    }
    public function messages()
    {
        return [
            'nombre_producto.required'=>'Este campo es requerido.',
            'nombre_producto.string'=>'El valor no es correcto.',
            'nombre_producto.max'=>'Solo se permite maximo 75 caracteres.',
            'descripcion_producto.required'=>'Este campo es requerido.',
            'descripcion_producto.string'=>'El valor no es correcto.',
            'descripcion_producto.max'=>'Solo se permite maximo 75 caracteres.',
            'valor_producto.required'=>'Este campo es requerido.',
            'valor_producto.integer'=>'El valor no es correcto.',
            'cantidad_producto.required'=>'Este campo es requerido.',
            'cantidad_producto.integer'=>'El valor no es correcto.',
        ];
    }
}
