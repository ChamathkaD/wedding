<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the new user requests.
     *
     */
    public function requests()
    {
        $records = User::where('is_activated', false)->get();
        return view('admin.users.requests')->with(compact('records'));
    }

    public function accept(User $user)
    {
        $user->is_activated = true;
        $user->save();

        $msg = $user->full_name . ' accepted.';
        return back()->with('success', $msg);
    }

    public function reject(User $user)
    {
        $msg = $user->full_name . ' deleted form the system.';

        $user->delete();

        return back()->with('success', $msg);
    }
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $records = User::where('is_activated', true)->get();
        return view('admin.users.index')->with(compact('records'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(User $user)
    {
        return view('admin.users.show')->with(compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
