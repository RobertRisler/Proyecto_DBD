<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RestauranteRequest extends FormRequest
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
			'nombre_restaurante' => 'required|string',
			'descripcion_rest' => 'required|string',
			'hora_apertura' => 'required|date_format:"H:i:s"',
			'hora_cierre' => 'required|date_format:"H:i:s"',
			'promedio_valoracion' => 'required|integer',
			'telefono_restaurante' => 'required|string',
			'hace_despacho' => 'required|boolean',
			'validacion' => 'required|boolean'
        ];
    }
}
