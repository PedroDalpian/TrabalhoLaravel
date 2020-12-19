<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimeRequest extends FormRequest
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
            'nome' => 'required|min:4',
            'modalidade' => 'required|min:4',
            'jogador1' => 'required|min:4',
            'jogador2' => 'required|min:4',
            'jogador3' => 'required|min:4',
            'jogador4' => 'required|min:4',
            'jogador5' => 'required|min:4',       
            'jogador6' => 'required|min:4',            
            'jogador7' => 'required|min:4',
            'jogador8' => 'required|min:4',
            'jogador9' => 'required|min:4',
            'jogador10' => 'required|min:4'
        ];
    }
}
