<?php

namespace App\Http\Controllers;

use App\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function __construct(){
    $this->middleware('auth:admin');
    }

    public function index(){
        return view('admin.index');
    }

    public function showProfile()
    {
        return view('admin.profile');
    }

    public function changePassword(Request $request)
    {
        if ($request->isMethod('POST')) {
            // check if the hash passwords are match
            if (Hash::check($request->current_password, Auth::user()->password)) {
                // hashing the new password
                $hashed_password = Hash::make($request->password_confirmation);
                // update password
                Admin::where('id', Auth::guard('admin')->id())->update([
                    'password' => $hashed_password,
                ]);
                // return redirect to back with success message
                return back()->with('success', 'Your Password has been updated!');
            } else {
                return back()->withErrors(['current_password' => 'Your current password is not valid. Please enter your valid password.']);
            }
        }

        return view('admin.password');
    }
}
