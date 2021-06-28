<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrokerController extends Controller
{
    public function updateBroker(){
        return view('brokers.updateBroker');
    }
}
