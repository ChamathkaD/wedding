<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Family;
use App\Http\Requests\SaveExperienceRequest;
use App\Http\Requests\SavePersonalInformationRequest;
use App\Http\Requests\SavePersonalLocationRequest;
use App\Http\Requests\UpdatePasswordRequest;
use App\Location;
use App\Social;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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

    public function savePersonalInfo(SavePersonalInformationRequest $savePersonalInformationRequest)
    {
        if ($savePersonalInformationRequest->hasFile('image')){
            if ($savePersonalInformationRequest->file('image')->isValid()){
                $image = $savePersonalInformationRequest->file('image');
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
            'first_name' =>$savePersonalInformationRequest->input('first_name'),
            'middle_name' =>$savePersonalInformationRequest->input('middle_name'),
            'last_name' =>$savePersonalInformationRequest->input('last_name'),
            'nic_name' =>$savePersonalInformationRequest->input('nic_name'),
            'email' =>$savePersonalInformationRequest->input('email'),
            'birthday' =>$savePersonalInformationRequest->input('birthday'),
            'gender' =>$savePersonalInformationRequest->input('gender'),
            'phone' =>$savePersonalInformationRequest->input('phone'),
            'whatsapp' =>$savePersonalInformationRequest->input('whatsapp'),
            'nationality' =>$savePersonalInformationRequest->input('nationality'),
            'religion' =>$savePersonalInformationRequest->input('religion'),
            'height' =>$savePersonalInformationRequest->input('height'),
            'weight' =>$savePersonalInformationRequest->input('weight'),
            'mother_tongue' =>$savePersonalInformationRequest->input('mother_tongue'),
            'horoscope' =>$savePersonalInformationRequest->input('horoscope'),
            'feature' =>$savePersonalInformationRequest->input('feature'),
            'marital_status' =>$savePersonalInformationRequest->input('marital_status'),
            'bio' =>$savePersonalInformationRequest->input('bio'),
        ]);
        return back()->with('success', 'Profile Created Successfully');
    }

    public function showLocationInfo()
    {
        return view('account.location');
    }

    public function saveLocationInfo(SavePersonalLocationRequest $personalLocationRequest)
    {
        $location = Location::firstOrNew(['user_id' => Auth::id()]);
        $location->user_id = Auth::id();
        $location->address_line1 = $personalLocationRequest->input('address_line1');
        $location->address_line2 = $personalLocationRequest->input('address_line2');
        $location->city = $personalLocationRequest->input('city');
        $location->district = $personalLocationRequest->input('district');
        $location->zip = $personalLocationRequest->input('zip');
        $location->home_town = $personalLocationRequest->input('home_town');
        $location->birth_country = $personalLocationRequest->input('birth_country');
        $location->current_city = $personalLocationRequest->input('current_city');
        $location->current_country = $personalLocationRequest->input('current_country');
        $location->save();

        return back()->with('success', 'Location Created Successfully');
    }

    public function showFamilyInfo()
    {
        return view('account.family');
    }

    public function saveFamilyInfo(Request $request)
    {
     $family = new Family();
     $family->user_id = Auth::id();
     $family->family_member = $request->input('family_member');
     $family->full_name = $request->input('full_name');
     $family->occupation = $request->input('occupation');
     $family->save();
    }

    public function showEducationInfo()
    {
        return view('account.education');
    }

    public function saveEducationInfo(Request $request)
    {


    }

    public function showJobInfo()
    {
        return view('account.job');
    }

    public function saveJobInfo(SaveExperienceRequest $saveExperienceRequest)
    {
        $experience = new Experience();
        $experience->user_id = Auth::id();
        $experience ->job_title = $saveExperienceRequest->input('job_title');
        $experience ->employment_type = $saveExperienceRequest->input('employment_type');
        $experience ->company = $saveExperienceRequest->input('company');
        $experience ->location = $saveExperienceRequest->input('location');
        $experience ->start_month = $saveExperienceRequest->input('start_month');
        $experience ->start_year = $saveExperienceRequest->input('start_year');
        $experience ->end_month = $saveExperienceRequest->input('end_month');
        $experience ->end_year = $saveExperienceRequest->input('end_year');
        $experience->save();
    }

    public function showGalley()
    {
        return view('account.gallery');
    }

    public function addPhotosToGallery(Request $request)
    {

    }

    public function showSocialInfo()
    {
        return view('account.social');
    }

    public function saveSocialInfo(Request $request)
    {
        $social = new Social();
        $social->user_id = Auth::id();
        $social->whatsapp =$request->input('whatsapp');
        $social->whatsapp_privacy =$request->input('whatsappPrivacy');
        $social->facebook =$request->input('facebook');
        $social->facebook_privacy =$request->input('facebookPrivacy');
        $social->instagram =$request->input('instagram');
        $social->instagram_privacy =$request->input('instagramPrivacy');
        $social->linkedin =$request->input('linkedin');
        $social->linkedin_privacy =$request->input('linkedinPrivacy');
        $social->save();
    }

    public function showChecklistInfo()
    {
        return view('account.checklist');
    }

    public function saveChecklistInfo(Request $request)
    {
        dd($request->all());
    }

    public function showPrivacySettings()
    {

    }

    public function savePrivacySettings(Request $request)
    {

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
