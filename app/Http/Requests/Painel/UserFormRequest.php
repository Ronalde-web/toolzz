<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'name'          => 'required|min:3|max:100',
            'email'         => "required|min:3|max:100|email|unique:users,email,{$this->segment(3)},id",
            'password'      => 'required|min:3|max:20|confirmed',
            'contato'       => 'required|min:3|max:100',
            'telefone'      => 'required|min:3|max:100',
            'celular'       => 'required|min:3|max:100',
            'image'         => 'image',
        ];
    }
}
