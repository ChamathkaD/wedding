<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'birthday', 'password',

        'firstName',
'middleName',
'lastName',
'nicName',
'gender',
'phone',
'whatsApp',
'addressLine1',
'addressLine2',
'addressLine3',
'nic',
'jobType',
'jobPost',
'weight',
'height',
'feature',
'nationality',
'religion',
'motherTongue',
'maritalStatus',
'horoscope',
'school',
'education',
'country',
'city',
'hobby',
'sd',
'fb',
'ig',
'aboutYou',
'brother',
'sister',
'fatherName',
'motherName',
'otherDetails',
'image',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
