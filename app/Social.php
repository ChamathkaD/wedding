<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
   protected $fillable =[
       'whatsapp',
       'whatsapp_privacy',
       'facebook',
       'facebook_privacy',
       'instagram',
       'instagram_privacy',
       'linkedin',
       'linkedin_privacy',
   ];
}
