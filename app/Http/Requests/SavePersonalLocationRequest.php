<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePersonalLocationRequest extends FormRequest
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
            'address_line1' =>['required','string',],
            'address_line2' =>['required','string',],
            'district' =>['required','string',],
            'city' =>['required','string',],
            'zip' =>['required','string',],
            'home_town' =>['required','string',],
            'birth_country' =>['required','string',],
            'current_city' =>['required','string',],
            'current_country' =>['required','string',],
        ];
    }
}
