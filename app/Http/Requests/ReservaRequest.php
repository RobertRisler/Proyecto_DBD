<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
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
			'cantidad_personas' => 'required|integer',
			'fecha_reserva' => 'required|date',
			'rut_cliente' => 'required|string',
			'nombre_cliente' => 'required|string',
			'apellido_cliente' => 'required|string',
			'estado_reserva' => 'required|boolean'
        ];
    }
}
