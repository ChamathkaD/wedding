<?php

namespace App;

use Illuminate\Contracts\Auth\Broker as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Broker extends Authenticatable
{
    /*use Notifiable;*/



    protected $fillable =[
        'firstName',
    'lastName',
    'email',
    'nic',
    'phone',
    'password',

    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
