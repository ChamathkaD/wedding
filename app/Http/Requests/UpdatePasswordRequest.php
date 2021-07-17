<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePasswordRequest extends FormRequest
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
            'current_password' =>['required' ] ,
            'password' =>['required', 'min:8', 'confirmed' ] ,
            'password_confirmation' =>[ 'required' ]
        ];
    }



    public function messages()
    {
        return [
            'current_password.required' => 'Please Enter Your Current Password',
            'password.required' => 'Please Enter Your New Password',
            'password_confirmation.required' => 'Please Re-Enter Your New Password',
            'password.min' => 'Your password must 8 or more characters in length',
            'password.confirmed' => 'Your New Password and confirmation password do not match. try again'
        ];
    }
}


