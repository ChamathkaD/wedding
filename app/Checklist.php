<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Checklist extends Model
{
    protected $fillable = [
        'drinking',
        'smoking',
        'clubbing',

    ];
}
