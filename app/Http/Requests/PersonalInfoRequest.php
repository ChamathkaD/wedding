<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class PersonalInfoRequest extends FormRequest
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
            'email' => ['required',
                'string',
                'email',
                'max:75',
                Rule::unique('users', 'email')->ignore(Auth::id()),],

            'birthday' =>['required' , 'date', 'before:2003-01-01' ],
            'firstName' =>['required','string','alpha', 'max:50'],
            'middleName' =>['required','string','alpha', 'max:50'],
            'lastName' =>['required','string','alpha', 'max:50'],
            'nicName' =>['required','string','alpha', 'max:50'],
            'gender' =>['required','string',],
            'phone' =>['required', 'digits:10', 'numeric', 'regex:/^[0-9]{10}/'],
            'whatsApp' =>['required', 'digits:10', 'numeric', 'regex:/^[0-9]{10}/'],
            'addressLine1' =>['required','string',],
            'addressLine2' =>['required','string',],
            'addressLine3' =>['required','string',],
            'nic' =>['required','regex:/^[0-9]{9}[vVxX]$/'],
            'jobType' =>['required','string'],
            'jobPost' =>['required','string'],
            'weight' =>['numeric','required' ],
            'height' =>['numeric','required' ],
            'feature' =>['required','string'],
            'nationality' =>['required','string'],
            'religion' =>['required','string'],
            'motherTongue' =>['required','string'],
            'maritalStatus' =>['required','string'],
            'horoscope' =>['required','string'],
            'school' =>['required','string'],
            'education' =>['required','string'],
            'country' =>['required','string'],
            'city' =>['required','string'],
            'hobby' =>['required','string'],
            'sd' =>['string'],
            'fb' =>['string'],
            'ig' =>['string'], // https://laravel.com/docs/7.x/validation#rule-url
            'aboutYou' =>['required','string'],
            'image' =>['mimes:jpeg,gif,png,svg,ico,jpg','required'], // wrong


        ];
    }
}
