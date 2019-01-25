<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComputerAccountFormRequest extends FormRequest
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
            'accountName' => 'required|min:5',
            'accountRole' => 'required|min:5',
            'password' => 'required|min:5',
        ];
    }
}