<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EquipoRequest extends FormRequest
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

    public function rules()
    {
        $rules = [
            'grupo_equipo_id' => 'required',
            'name'   => 'required',
            'marca'  => 'required',
            'tipo'   => 'required',
            'tarifa' => 'required'
        ];

        return $rules;
    }
}
