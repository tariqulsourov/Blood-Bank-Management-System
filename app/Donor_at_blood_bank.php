<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Donor_at_blood_bank extends Authenticatable
{
    use Notifiable;

    protected $guard = 'donor_at_blood_bank';

    protected $fillable = [
        'name', 'email', 'password', 'blood_type', 'phone_no', 'NID','age' ,'gender' , 'status', 'last_donation_date', 'earned_point', 'police_station', 'post_office', 'post_code', 'city', 'division',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
