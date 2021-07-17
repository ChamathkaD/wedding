<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class SavePersonalInformationRequest extends FormRequest
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
            'first_name' => 'required','string','alpha', 'max:50',
            'middle_name' => 'nullable','string','alpha', 'max:50',
            'last_name' => 'required','string','alpha', 'max:50',
            'nic_name' => 'nullable','string','alpha', 'max:50',
            'email' =>
                 'required',
                 'string',
                 'email',
                 'max:75',
                 Rule::unique('users', 'email')->ignore(Auth::id()),
            'birthday'=> 'required', 'date',
            'gender'=> 'required','string',
            'phone' => 'required', 'digits:10', 'numeric', 'regex:/^[0-9]{10}/',
            'nationality' => 'required','string',
            'religion' => 'required','string',
            'height' => 'required','string',
            'weight' => 'required','string',
            'mother_tongue' => 'required','string',
            'horoscope' => 'required','string',
            'feature' => 'required','string',
            'marital_status' => 'required','string',
            'bio'=> 'string',
            'image' => 'mimes:jpeg,gif,png,svg,ico,jpg',
        ];
    }
}
