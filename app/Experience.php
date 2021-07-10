<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    'job_title',
        'employment_type',
        'company',
        'location',
        'start_month',
        'start_year',
        'end_month',
        'end_year',





    ];
}
