<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Deficiencia extends FormRequest
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
            'val' => 'required|boolean',
        ];

    }
    public function messages()
    {
    return [
        'val.required'=> 'Favor marcar se possui deficiencia'
        ];
    }
}