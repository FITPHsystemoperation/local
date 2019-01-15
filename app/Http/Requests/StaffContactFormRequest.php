<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffContactFormRequest extends FormRequest
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
            'contactNo' => 'required|min:7',
            'emailAddress' => 'required|email',
            'permanentAddress' => 'required|min:5',
            'presentAddress' => 'required|min:5',
        ];
    }
}
