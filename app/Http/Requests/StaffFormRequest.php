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
            'idNumber' => 'required|min:4',
            'firstName' => 'required|min:2',
            'middleName' => 'required|min:2',
            'lastName' => 'required|min:2',
            'nickName' => 'required|min:2',
            'birthday' => 'required|date',
        ];
    }
}
