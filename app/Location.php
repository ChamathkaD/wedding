<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address_line1',
        'address_line2',
        'city',
        'district',
        'zip',
        'home_town',
        'birth_country',
        'current_city',
        'current_country',
    ];
}
