<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PedidoRequest extends FormRequest
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
			'nombre_cliente' => 'required|string',
			'apellido_cliente' => 'required|string',
			'rut_cliente' => 'required|string',
			'correo_cliente' => 'required|email',
			'fecha_pedido' => 'required|date',
			'tipo_entrega' => 'required|integer',
			'hora_estimada' => 'required|date_format:"H:i:s"',
			'estado_pedido' => 'required|boolean'
        ];
    }
}
