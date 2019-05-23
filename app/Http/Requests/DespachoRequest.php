<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DespachoRequest extends FormRequest
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
			'nombre_repartidor' => 'required|string',
			'rut_repartidor' => 'required|string',
			'tiempo_estimado' => 'required|date_format:"H:i:s"',
			'estado_despacho' => 'required|boolean',
			'tiempo_despachado' => 'required|date_format:"H:i:s"'
        ];
    }
}
