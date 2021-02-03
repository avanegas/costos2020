<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     *
     * Para que un usuario no autorizado cambie los datos
     *
     *   if($this->user_id == auth()->user()->id){
     *       return true;
     *   }else{
     *       return false;
     *   }
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
        $post = $this->route()->parameter('post');

        $rules = [
            'name'   => 'required',
            'slug'   => 'required|unique:posts',
            'status' => 'required',
            'file'   => 'image'           
        ];

        if($post){
            $rules['slug'] = 'required|unique:posts,slug,' . $post->id;
        }

        if($this->status=="PUBLISHED"){
            $rules = array_merge($rules, [
                'category_id' => 'required',
                'tags'        => 'required',
                'excerpt'     => 'required',
                'body'        => 'required'
            ]);
        }
        return $rules;
    }
}
