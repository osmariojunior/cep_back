<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnderecoPost extends FormRequest
{


    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {

        return [
            'cep' => 'required|min:8|max:8',
            'logradouro' => 'required',
            'complemento' => 'required',
            'bairro' => 'required',
            'localidade' => 'required',
            'uf' => 'required',
            'ibge' => 'required',
            'ddd' => 'required',
            'siafi' => 'required',
        ];
    }
}
