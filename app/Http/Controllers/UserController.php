<?php

namespace App\Http\Controllers;

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

    public function savePersonalInfo(SavePersonalInformationRequest $request)
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

    public function showChangePassword(){
        return view('users.password');
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
