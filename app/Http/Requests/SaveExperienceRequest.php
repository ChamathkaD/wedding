<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveExperienceRequest extends FormRequest
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
            'job_title' =>['required','string',],
            'employment_type' =>['required','string',],
            'company' =>['required','string',],
            'location' =>['required','string',],
            'start_month' =>['required'],
            'start_year' =>['required',],
            'end_month' =>['nullable'],
            'end_year' =>['nullable'],
        ];
    }
}
