<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
			'nombre_usuario' => 'required|string',
			'apellido_usuario' => 'required|string',
			'correo_usuario' => 'required|email',
			'contrasena' => 'required|string'
        ];
    }
}
