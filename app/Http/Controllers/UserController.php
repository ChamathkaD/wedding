<?php

namespace App\Http\Controllers;

use App\Checklist;
use App\Experience;
use App\Family;
use App\Http\Requests\SaveExperienceRequest;
use App\Http\Requests\SavePersonalInformationRequest;
use App\Http\Requests\SaveLocationRequest;
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
                $extension = $image->getClientOriginalExtension();
                $filename = date('y_m_d_h_i_s') . "." . $extension;
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

    public function saveLocationInfo(SaveLocationRequest $request)
    {
        $location = Location::firstOrNew(['user_id' => Auth::id()]);
        $location->user_id = Auth::id();
        $location->address_line1 = $request->input('address_line1');
        $location->address_line2 = $request->input('address_line2');
        $location->city = $request->input('city');
        $location->district = $request->input('district');
        $location->zip = $request->input('zip');
        $location->home_town = $request->input('home_town');
        $location->birth_country = $request->input('birth_country');
        $location->current_city = $request->input('current_city');
        $location->current_country = $request->input('current_country');
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

    public function saveJobInfo(SaveExperienceRequest $request)
    {
        $experience = new Experience();
        $experience->user_id = Auth::id();
        $experience ->job_title = $request->input('job_title');
        $experience ->employment_type = $request->input('employment_type');
        $experience ->company = $request->input('company');
        $experience ->location = $request->input('location');
        $experience ->start_month = $request->input('start_month');
        $experience ->start_year = $request->input('start_year');
        $experience ->end_month = $request->input('end_month');
        $experience ->end_year = $request->input('end_year');
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
        $social = Social::firstOrNew(['user_id' => Auth::id()]);;
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

        return back()->with('success', 'Social Updated!');
    }

    public function showChecklistInfo()
    {
        return view('account.checklist');
    }

    public function saveChecklistInfo(Request $request)
    {
        $check = Checklist::firstOrNew(['user_id' => Auth::id()]);
        $check->user_id = Auth::id();
        $check->drinking =$request->input('drinking');
        $check->smoking =$request->input('smoking');
        $check->clubbing =$request->input('clubbing');
        $check->save();

        return back()->with('success', 'Checklist Updated!');
    }

    public function showPrivacySettings()
    {
        return view('account.privacy');
    }

    public function showChangePasswordForm()
    {
        return view('account.partials.password');
    }

    public function updatePassword(Request $request)
    {
        dd($request->all());
    }

    public function showSettings()
    {
        return view('account.settings');
    }

    public function saveSettings(Request $request)
    {
        dd($request->all());
    }

    /*public function updatePassword(UpdatePasswordRequest $updatePasswordRequest){

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


    }*/

    public function showUsers(){
        return view('users.users');
    }

    public function showProfile($id){
        $user = User::find($id);

        return view('users.profile')->with(compact('user'));
    }

}
