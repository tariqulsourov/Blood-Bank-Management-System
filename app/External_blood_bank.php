<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class External_blood_bank extends Authenticatable
{
    use Notifiable;

    protected $guard = 'external_blood_bank';

    protected $fillable = [
        'name', 'email', 'password', 'phone_no', 'blood_type', 'blood_bag_quantity', 'police_station', 'post_office', 'post_code', 'city', 'latitude', 'longitude',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
