<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfertaRequest extends FormRequest
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
        $oferta = $this->route()->parameter('oferta');
        $rules = [
            'name'   => 'required',
            'slug'   => 'required|unique:posts',
            'status' => 'required',
            'file'   => 'image|max:3000',
            'archivo.*' => 'required|file|mimes:pdf'
        ];

        if($oferta){
            $rules['slug'] = 'required|unique:ofertas,slug,' . $oferta->id;
        }

        if($this->status=="PUBLISHED"){
            $rules = array_merge($rules, [
                'user_id'     => 'required',
                'unidad'      => 'required',
                'descripcion' => 'required',
                'stock'       => 'required',
                'precio'      => 'required'
            ]);
        }
        return $rules;
    }
}
