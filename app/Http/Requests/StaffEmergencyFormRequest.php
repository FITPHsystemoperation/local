<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffEmergencyFormRequest extends FormRequest
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
            'emergencyPerson' => 'required|min:3',
            'emergencyNo' => 'required|min:7',
            'emergencyRelation' => 'required|min:3',
        ];
    }
}
