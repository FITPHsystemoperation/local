<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffFormRequest extends FormRequest
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
            'idNumber' => 'required|min:5',
            'firstName' => 'required|min:5',
            'middleName' => 'required|min:5',
            'lastName' => 'required|min:5',
            'nickName' => 'required|min:5',
            'birthday' => 'required|date',
        ];
    }
}
