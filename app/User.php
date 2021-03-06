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
        'email',
        'password',
        'birthday',
        'first_name',
        'middle_name',
        'last_name',
        'nic_name',
        'gender',
        'phone',
        'whatsapp',
        'addressLine1',
        'addressLine2',
        'addressLine3',
        'nic',
        'job_type',
        'job_post',
        'weight',
        'height',
        'feature',
        'nationality',
        'religion',
        'mother_tongue',
        'marital_status',
        'horoscope',
        'school',
        'education',
        'country',
        'city',
        'hobby',
        'sd',
        'facebook',
        'instagram',
        'bio',
        'brothers',
        'sisters',
        'father_name',
        'mother_name',
        'other',
        'image',
        'is_blocked',
        'is_activated',
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

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute() {

        if (isset($this->first_name) && isset($this->last_name)) {
            return "{$this->first_name} {$this->last_name}";
        }

    }

    /**
     * Get the schools for the user.
     */
    public function schools()
    {
        return $this->hasMany(School::class, 'user_id');
    }

    /**
     * Get the universities for the user.
     */
    public function universities()
    {
        return $this->hasMany(University::class, 'user_id');
    }

    /**
     * Get the experiences for the user.
     */
    public function experiences()
    {
        return $this->hasMany(Experience::class, 'user_id');
    }

    /**
     * Get the location record associated with the user.
     */
    public function location()
    {
        return $this->hasOne(Location::class, 'user_id');
    }

    /**
     * Get the family members for the user.
     */
    public function families()
    {
        return $this->hasMany(Family::class, 'user_id');
    }

    /**
     * Get the photos for the user.
     */
    public function photos()
    {
        return $this->hasMany(Photo::class, 'user_id');
    }

    /**
     * Get the checklist record associated with the user.
     */
    public function checklist()
    {
        return $this->hasOne(Checklist::class, 'user_id');
    }

    /**
     * Get the social record associated with the user.
     */
    public function social()
    {
        return $this->hasOne(Social::class, 'user_id');
    }
}
