<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blood_bag extends Model
{
    protected $fillable = [
        'branch_id', 'blood_type', 'stored_date', 'exp_date', 'donated_by', 'received_by',
    ];
}
