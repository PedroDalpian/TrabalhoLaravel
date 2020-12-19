<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'responsavel' => 'required|min:4',
            'horainicioreserva' => 'required|min:4',
            'horafimreserva' => 'required|min:4',
            'datareserva' => 'required|min:4',
            'time_id' => 'required',
            'quadra_id' => 'required'
            ];
    }
}
