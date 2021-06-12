<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;

class UserController extends Controller
{
    public function createUserAccount(){
        return view('users.createAccount');
    }

    public function updateUserAccount(Request $request){
        if ($request->hasFile('image')){
            if ($request->file('image')->isValid()){
                $image = $request->file('image');
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
            'firstName' =>$request->input('firstName'),
            'middleName' =>$request->input('middleName'),
            'lastName' =>$request->input('lastName'),
            'nicName' =>$request->input('nicName'),
            'birthday' =>$request->input('birthday'),
            'gender' =>$request->input('gender'),
            'email' =>$request->input('email'),
            'phone' =>$request->input('phone'),
            'whatsApp' =>$request->input('whatsApp'),
            'addressLine1' =>$request->input('addressLine1'),
            'addressLine2' =>$request->input('addressLine2'),
            'addressLine3' =>$request->input('addressLine3'),
            'nic' =>$request->input('nic'),
            'jobType' =>$request->input('jobType'),
             'jobPost' =>$request->input('jobPost'),
             'weight' =>$request->input('weight'),
             'height' =>$request->input('height'),
             'feature' =>$request->input('feature'),
              'nationality' =>$request->input('nationality'),
              'religion' =>$request->input('religion'),
              'motherTongue' =>$request->input('motherTongue'),
              'maritalStatus' =>$request->input('maritalStatus'),
            'horoscope' =>$request->input('horoscope'),
            'school' =>$request->input('school'),
            'education' =>$request->input('education'),
            'country' =>$request->input('country'),
            'city' =>$request->input('city'),
            'hobby' =>$request->input('hobby'),
            'sd' =>$request->input('sd'),
            'fb' =>$request->input('fb'),
            'ig' =>$request->input('ig'),
            'aboutYou' =>$request->input('aboutYou'),
            'brother' =>$request->input('brother'),
            'sister' =>$request->input('sister'),
            'fatherName' =>$request->input('fatherName'),
            'motherName' =>$request->input('motherName'),
            'otherDetails' =>$request->input('otherDetails'),
             'image' => isset($filename) ? $filename : Auth::user()->image,
        ]);
        return back()->with('success','Profile Updated Successfully');
    }




}
