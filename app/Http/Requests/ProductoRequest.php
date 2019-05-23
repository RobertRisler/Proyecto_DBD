<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
			'nombre_producto' => 'required|string',
			'descripcion_producto' => 'required|string',
			'precio_total' => 'required|integer',
			'tipo_producto' => 'required|string',
			'disponibilidad_producto' => 'required|boolean'
        ];
    }
}
