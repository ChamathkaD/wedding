<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    //Admin login request
    public function login(Request $request){

        //validate the form data
        $request->validate([
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        //attempt to log the admin in
        if (Auth::guard('admin')->attempt([ 'email' => $request->input('email'), 'password' => $request->input('password')])){
       //return to admin dashboard
            return redirect()->intended(route('admin.dashboard'));
        }else {
       //redirect back to login
            return back()->withInput($request->only('email'))->withErrors('please check your credentials and try again ');
        }

    }

    //log the admin out of the application

    public function logout(Request $request){

        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        return redirect()->route('admin.login');
    }

}
