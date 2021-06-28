<?php

namespace App\Http\Controllers\Auth;

use App\Broker;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BrokerController extends Controller
{


    public function registerBroker(){
        return view('auth.brokerRegister');
    }

    public function loginBroker(){
        return view('auth.brokerLogin');
    }

    protected function createBroker(array $data)
    {
        return Broker::create([

            'firstName' => $data['firstName'],
            'lastName' => $data['lastName'],
            'nic' => $data['nic'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
