<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffWorkFormRequest extends FormRequest
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
            'dateHired' => 'required|date',
            'employmentStat_id' => 'required|integer',
            'jobTitle_id' => 'required|integer',
            'department_id' => 'required|integer',
            'dailyRate' => 'required|numeric',
        ];
    }
}
