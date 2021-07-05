<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonalInfoRequest;
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
    public function showAccount()
    {
        return view('account.index');
    }

    public function showPersonalInfo()
    {
        return view('account.personal');
    }

    public function savePersonalInfo(Request $request)
    {
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

        User::where('id',Auth::id())->update([
            'image' => isset($filename) ? $filename : Auth::user()->image,
            'first_name' =>$request->input('first_name'),
            'middle_name' =>$request->input('middle_name'),
            'last_name' =>$request->input('last_name'),
            'nic_name' =>$request->input('nic_name'),
            'email' =>$request->input('email'),
            'birthday' =>$request->input('birthday'),
            'gender' =>$request->input('gender'),
            'phone' =>$request->input('phone'),
            'whatsapp' =>$request->input('whatsapp'),
            'nationality' =>$request->input('nationality'),
            'religion' =>$request->input('religion'),
            'height' =>$request->input('height'),
            'weight' =>$request->input('weight'),
            'mother_tongue' =>$request->input('mother_tongue'),
            'horoscope' =>$request->input('horoscope'),
            'feature' =>$request->input('feature'),
            'marital_status' =>$request->input('marital_status'),
            'bio' =>$request->input('bio'),
        ]);
    }

    public function showLocationInfo()
    {
        return view('account.location');
    }

    public function saveLocationInfo(Request $request)
    {

    }

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

        $current_Password = $updatePasswordRequest->current_password;
        //Check if the passwords are match
        if (Hash::check($current_Password, Auth::user()->password)){
            $new_password = $updatePasswordRequest->password_confirmation;
            //hashing the nwe password
            $hashed_password = Hash::make($new_password);
            //update password
            User::where('id', Auth::id())->update([
                'password' => $hashed_password,
            ]);

            return back()->with('success', 'Your Password has been updated');

        }else{
            return back()->withErrors('Your current password is not valid. Please enter your new password');
        }


    }

    public function showUsers(){
        return view('users.users');
    }

    public function showProfile($id){
        $user = User::find($id);

        return view('users.profile')->with(compact('user'));
    }

}
