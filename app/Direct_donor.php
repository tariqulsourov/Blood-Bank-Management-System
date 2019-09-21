<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Direct_donor extends Authenticatable
{
    use Notifiable;

    protected $guard = 'direct_donor';

    protected $fillable = [
        'name', 'email', 'password', 'blood_type', 'phone_no', 'NID','age','gender', 'status', 'last_donation_date', 'rating', 'police_station', 'post_office', 'post_code', 'city', 'division',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
