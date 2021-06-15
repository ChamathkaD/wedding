<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    public function createUserAccount(){
        return view('users.createAccount');
    }

    public function updateUserAccount(UserRequest $userRequest){
        if ($userRequest->hasFile('image')){
            if ($userRequest->file('image')->isValid()){
                $image = $userRequest->file('image');
                $extention = $image->getClientOriginalExtension();
                $filename = date('y_m_d_h_i_s') . "." . $extention;
                Storage::disk('public')->put('img/users/'.$filename,file_get_contents($image));
            }
            if (Storage::disk('public')->exists('img/users/'.Auth::user()->image)){
                try {
                    (Storage::disk('public')->delete('img/users/'.Auth::user()->image));
                } catch (\Exception $exception){
                    return null;
                }
            }
        }






        User::where('id', Auth::id())->update([
            'firstName' =>$userRequest->input('firstName'),
            'middleName' =>$userRequest->input('middleName'),
            'lastName' =>$userRequest->input('lastName'),
            'nicName' =>$userRequest->input('nicName'),
            'birthday' =>$userRequest->input('birthday'),
            'gender' =>$userRequest->input('gender'),
            'email' =>$userRequest->input('email'),
            'phone' =>$userRequest->input('phone'),
            'whatsApp' =>$userRequest->input('whatsApp'),
            'addressLine1' =>$userRequest->input('addressLine1'),
            'addressLine2' =>$userRequest->input('addressLine2'),
            'addressLine3' =>$userRequest->input('addressLine3'),
            'nic' =>$userRequest->input('nic'),
            'jobType' =>$userRequest->input('jobType'),
             'jobPost' =>$userRequest->input('jobPost'),
             'weight' =>$userRequest->input('weight'),
             'height' =>$userRequest->input('height'),
             'feature' =>$userRequest->input('feature'),
              'nationality' =>$userRequest->input('nationality'),
              'religion' =>$userRequest->input('religion'),
              'motherTongue' =>$userRequest->input('motherTongue'),
              'maritalStatus' =>$userRequest->input('maritalStatus'),
            'horoscope' =>$userRequest->input('horoscope'),
            'school' =>$userRequest->input('school'),
            'education' =>$userRequest->input('education'),
            'country' =>$userRequest->input('country'),
            'city' =>$userRequest->input('city'),
            'hobby' =>$userRequest->input('hobby'),
            'sd' =>$userRequest->input('sd'),
            'fb' =>$userRequest->input('fb'),
            'ig' =>$userRequest->input('ig'),
            'aboutYou' =>$userRequest->input('aboutYou'),
            'brother' =>$userRequest->input('brother'),
            'sister' =>$userRequest->input('sister'),
            'fatherName' =>$userRequest->input('fatherName'),
            'motherName' =>$userRequest->input('motherName'),
            'otherDetails' =>$userRequest->input('otherDetails'),
             'image' => isset($filename) ? $filename : Auth::user()->image,
        ]);
        return back()->with('success','Profile Updated Successfully');
    }


    public function showChangePassword(){
        return view('users.password');
    }

    public function updatePassword(UpdatePasswordRequest $updatePasswordRequest){


        if (Hash::check($updatePasswordRequest->current_password, Auth::user()->password)) {
            $hashed_password = Hash::make($updatePasswordRequest->password_confirmation);

            User::where('id', Auth::id())->update([
                'password' => $hashed_password,
            ]);

            return back()->with('success', 'Your Password Has been Updated');
        }


    }

    public function showUsers(){
        return view('users.users');
    }

}
