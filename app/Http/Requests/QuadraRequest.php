<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuadraRequest extends FormRequest
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
            'nome' => 'required|min:5',
            'modalidade_id' => 'required',           
            'endereco' => 'required|min:5',
            'numero' => 'required|min:1',
            'bairro' => 'required|min:5',
            'CEP' => ' required|min:8',
            'cidade' => 'required|min:5',        
            'UF' => 'required',            
            'telefone' => 'required|min:10',
            'email' => 'required|min:5|email',            

            'horainiciosegunda' => 'required',
            'horafimsegunda' => 'required',
            'valorsegunda' => 'required',
            'horainicioterca' => 'required',
            'horafimterca' => 'required',
            'valorterca' => 'required',
            'horainicioquarta' => 'required',
            'horafimquarta' => 'required',
            'valorquarta' => 'required',
            'horainicioquinta' => 'required',
            'horafimquinta' => 'required',
            'valorquinta' => 'required',
            'horainiciosexta' => 'required',
            'horafimsexta' => 'required',
            'valorsexta' => 'required',
            'horainiciosabado' => 'required',
            'horafimsabado' => 'required',
            'valorsabado' => 'required',
            'horainiciodomingo' => 'required',
            'horafimdomingo' => 'required',
            'valordomingo' => 'required',          

            'observacao' => 'required',
            'redesocial' => 'required'
        ];
    }
}
